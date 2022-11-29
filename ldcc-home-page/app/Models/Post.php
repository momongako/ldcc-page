<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'thumbnail',
        'author_name',
        'publish_date',
        'author_id',
        'content',
        'status',
        'type',
        'like_post',
        'count_view',
        'hot_post',
        'home_post',
        'keyword',
        'tag',
        'rating',
        'category_id',
        'created_by_type',
        'created_by',
        'deleted_at',
        'deactive_at',
        'position',
        'location',
        'levers',
        'levers_name',
        'recruitment_office',
        'recruitment_office_name',
        'job_description',
        'job_requirements',
        'case_name',
        'case_description',
        'our_client',
        'challenges_and_needs',
        'our_work',
        'outcome',
        'start_date',
        'end_date'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const STATUS_PENDING = 0;
    const STATUS_PUBLISH = 1;
    const STATUS_DELETED = 2;

    const TYPE_ADMIN = 1;
    const TYPE_ADVISOR = 2;

    const CREATED_BY_TYPE_ADMIN = 1;
    const CREATED_BY_TYPE_ADVISOR = 2;

    //Add extra attribute
    // protected $attributes = ['link','post_thumbnail'];

    //Make it available in the json response
    protected $appends = ['link','post_thumbnail'];

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $items = Post::with('category')->with('user');
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $items->whereRaw('((`title` like ?) or (author_name like ?))',
                [$keyword,$keyword]
            );
        }
        if (!empty($params['author_name'])) {
            $adName = '%'.$params['author_name'].'%';
            $items->whereRaw('((`author_name` like ?))',
                [$adName]
            );
        }
        if (!empty($params['start_publish_date'])) {
            $items->where('publish_date','>=',$params['start_publish_date']);
        }
        if (!empty($params['end_publish_date'])) {
            $items->where('publish_date','<=',$params['end_publish_date']);
        }
        if (!empty($params['status'])) $items->whereIn('status',json_decode($params['status']));

        if (!empty($params['category_id'])) $items->where('category_id',json_decode($params['category_id']));

        if (!empty($params['status'])) {
            if($params['status'] == 3){// neu status = 3(Luu nhap) thi chi hien thi cho user do
                $userid = Auth::id();
                if($userid !== 1 && $userid !== 4){
                    $items->where('created_by', $userid);
                }
            }
        }

        // 3 : HR  ; 4:Sale
        if (auth()->user()->type == 3){
            $items->whereIn('category_id',[1,2]);
        }

        if (auth()->user()->type == 4){
            $items->whereIn('category_id',[1,3]);
        }

        $items->with('category')->orderBy('created_at', 'desc');
        return $items;
    }


    /**
     * @param $data
     * @return mixed
     */
    public function createPost ($data) {
        if ($data['category_id'] == 1){
            if (!empty($data['title'])) $data['slug'] = str_slug($data['title']);

            if (empty($data['slug'])) $data['slug'] = str_slug($data['title']);
        }

        if ($data['category_id'] == 2){
            if (!empty($data['position'])) $data['slug'] = str_slug($data['position']);

            if (empty($data['slug'])) $data['slug'] = str_slug($data['position']);
        }

        if ($data['category_id'] == 3){
            if (!empty($data['case_name'])) $data['slug'] = str_slug($data['case_name']);

            if (empty($data['slug'])) $data['slug'] = str_slug($data['case_name']);
        }


        $post = Post::where('slug',$data['slug'])->first();

        if ($post) {
            $numericalPrefix = 1;
            while(1){
                if ($data['category_id'] == 1){
                    $newSlug = str_slug($data['title'])."-".$numericalPrefix++;
                }
                if ($data['category_id'] == 2){
                    $newSlug = str_slug($data['position'])."-".$numericalPrefix++;
                }
                if ($data['category_id'] == 3){
                    $newSlug = str_slug($data['case_name'])."-".$numericalPrefix++;
                }

                $checkSlug = Post::where('slug', $newSlug)->exists(); //CHeck có trong DB chưa

                if(!$checkSlug){
                    $data['slug'] = $newSlug; //New Slug
                    break;
                }
            }
        } else {
            if ($data['category_id'] == 1){
                $data['slug'] = str_slug($data['title']);
            }
            if ($data['category_id'] == 2){
                $data['slug'] = str_slug($data['position']);
            }
            if ($data['category_id'] == 3){
                $data['slug'] = str_slug($data['case_name']);
            }

        }

        return Post::create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updatePost ($id,$data) {
        $post = Post::findOrFail($id);
        if ($data['category_id'] == 1){
            if (empty($data['slug']))
                $data['slug'] = str_slug($data['title']);
        }
        if ($data['category_id'] == 2){
            if (empty($data['slug']))
                $data['slug'] = str_slug($data['position']);
        }
        if ($data['category_id'] == 3){
            if (empty($data['slug']))
                $data['slug'] = str_slug($data['case_name']);
        }

        $postCheck = Post::where('slug',$data['slug'])->first();

        if ($postCheck) {
            if($postCheck->id == $id && $postCheck->slug == $data['slug']){
                // ko can update(thực ra vẫn là data slug gửi lên)
            }else if($postCheck->id == $id && $postCheck->slug != $data['slug']){
                // update theo cai moi(thực ra vẫn là data slug gửi lên)
            }else if($postCheck->id != $id && $postCheck->slug == $data['slug']){
                // update theo số count post check

                $numericalPrefix = 1;
                while(1){
                    $newSlug = $data['slug']."-".$numericalPrefix++;

                    $checkSlug = Post::where('slug', $newSlug)->exists(); //CHeck có trong DB chưa

                    if(!$checkSlug){
                        $data['slug'] = $newSlug; //New Slug
                        break;
                    }
                }
            }else{
                $data['slug'] = $data['slug'].'-1';
            }
        }

        $post->update($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateDeletePost ($id,$data) {
        $post = Post::findOrFail($id);
        $post->update($data);
    }

    public function category () {
        return $this->belongsTo(Category::class, 'category_id')->select(['id','name','slug']);
    }

    public function user () {
        return $this->belongsTo(Admin::class, 'created_by')->select(['id','name','thumbnail','type','api_provider_id','api_role']);
    }

    public function relationPosts()
    {
        return $this->belongsToMany(Post::class,'relation_posts','post_id','relation_post_id');
    }

    public function getLinkAttribute()
    {
        $link = \App\Lib\BHelp::getLinkCustom('post', $this);
        return $link;
    }
    public function getPostThumbnailAttribute()
    {
        return env('AWS_URL').$this->thumbnail;
    }

    public function commentFrontend()
    {
        return $this->hasMany(Comment::class, 'post_id')->whereNull('parent_id');
    }
        /**
     * @return Post|\Illuminate\Database\Eloquent\Builder
     */
    public function getListPostsForApi () {
        $items = Post::with('category')->select([
            'created_by',
            'title',
            'sub_title as description',
            'slug',
            'thumbnail',
            'author_id',
            'author_name',
            'publish_date as created_at',
            // 'content',
            'status',
            'type',
            'like_post',
            'keyword',
            'tag',
            'category_id',
            'count_view'
        ])->where('status',1);
        return $items;
    }
}
