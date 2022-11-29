<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{

    protected $table = 'comments';
    protected $fillable = [
        'parent_id',
        'post_id',
        'ad_id',
        'ad_name',
        'content',
        'status'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $items = Comment::with('post')->with('parent');
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $items->whereRaw('((`content` like ?))',
                [$keyword]
            );
        }
        if (!empty($params['ad_name'])) {
            $adName = '%'.$params['ad_name'].'%';
            $items->whereRaw('((`ad_name` like ?))',
                [$adName]
            );
        }
        if (!empty($params['status'])) $items->whereIn('status',json_decode($params['status']));
        $items->orderBy('created_at', 'desc');
        return $items;
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateComment ($id,$data) {
        $post = Comment::findOrFail($id);
        $post->update($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateDeleteComment ($id,$data) {
        $post = Post::findOrFail($id);
        $post->update($data);
    }

    public function post () {
        return $this->belongsTo(Post::class, 'post_id')->select(['id','title']);
    }

    public function parent () {
        return $this->belongsTo(Comment::class, 'parent_id')->select(['id','content']);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function user () {
        return $this->belongsTo(Admin::class, 'ad_id')->select(['id','name','thumbnail']);
    }

    public function childrenComments(){
        return $this->hasMany(Comment::class,'parent_id')->where('status',1)->with('childrenComments')->with('user');
    }

}
