<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Config extends Model
{

    protected $table = 'configs';
    protected $fillable = [
        'key',
        'value',
        'tab_id',
        'value_type',
        'description',
        'status',
        'deleted_at',
        'deactive_at'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $configs = DB::table('configs');
        $configs->where('status',1);
        if (!empty($params['tab_id'])) {
            $configs->where('tab_id',$params['tab_id']);
        }
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $configs->whereRaw('((`key` like ?) or (`value` like ?))',
                [$keyword,$keyword,$keyword]
            );
        }
        $configs->orderBy('created_at', 'desc');
        return $configs;
    }

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getListAdmin ($params) {
        $configs = DB::table('configs');
        $configs->where('status',1);
        if (!empty($params['tab_id'])) {
            $configs->where('tab_id',$params['tab_id']);
        }
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $configs->whereRaw('((`key` like ?) or (`value` like ?))',
                [$keyword,$keyword,$keyword]
            );
        }
        $configs->orderBy('created_at', 'desc');
        return $configs;
    }

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getListApi ($params) {
        $configs = DB::table('configs');
        $configs->select([
            'id',
            'description',
            'value as author',
            'updated_at',
            'created_at'
        ]);
        $configs->where('status',1);
        if (!empty($params['tab_id'])) {
            $configs->where('tab_id',$params['tab_id']);
        }

        if($params['random'] == 0){ // = 0 là lấy ngày hiện tại
            $configs->whereRaw('Date(updated_at) = CURDATE()');
        }
        $configs->orderBy('updated_at', 'desc')->limit(1);
        return $configs;
    }


    /**
     * @param $data
     */
    public function createConfig ($data) {
        Config::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateConfig ($id,$data) {
        $customer = Config::findOrFail($id);
        $customer->update($data);
    }

    
    /**
     * @param $id
     * @param $data
     */
    public function updateDeleteConfig ($id,$data) {
        $config = Config::findOrFail($id);
        $config->update($data);
    }

}
