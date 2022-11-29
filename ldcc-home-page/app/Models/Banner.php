<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Banner extends Model
{

    protected $table = 'banners';
    protected $fillable = [
        'link',
        'path',
        'status',
        'description'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $items = DB::table('banners');
        $items->where('status',1);
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $items->whereRaw('((`key` like ?))',
                [$keyword]
            );
        }
        $items->orderBy('created_at', 'desc');
        return $items;
    }


    /**
     * @param $data
     */
    public function createBanner ($data) {
        Banner::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateBanner ($id,$data) {
        $customer = Banner::findOrFail($id);
        $customer->update($data);
    }


    /**
     * @param $id
     * @param $data
     */
    public function updateDeleteBanner ($id,$data) {
        $config = Banner::findOrFail($id);
        $config->update($data);
    }

}
