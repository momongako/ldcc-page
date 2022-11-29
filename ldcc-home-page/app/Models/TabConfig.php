<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TabConfig extends Model
{

    protected $table = 'tab_configs';
    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $configs = DB::table('tab_configs');
        $configs->where('status',1);
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $configs->whereRaw('((`name` like ?))',
                [$keyword,$keyword,$keyword]
            );
        }

        $configs->orderBy('created_at', 'desc');
        return $configs;
    }


    /**
     * @param $data
     */
    public function createConfig ($data) {
        TabConfig::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateConfig ($id,$data) {
        $customer = TabConfig::findOrFail($id);
        $customer->update($data);
    }

}
