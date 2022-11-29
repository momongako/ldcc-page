<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{

    protected $table = 'menus';
    protected $fillable = [
        'name',
        'link',
        'status',
        'type',
        'parent_id',
        'path',
        'sort_number',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $items = Menu::with('parent');
        $items->where('status',1);
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $items->whereRaw('((`name` like ?))',
                [$keyword]
            );
        }

        $items->with('parent')->orderBy('created_at', 'desc');
        return $items;
    }


    /**
     * @param $data
     */
    public function createItem ($data) {
        if (!empty($data['parent'])) $data['parent_id'] = $data['parent']['id'];
        Menu::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateItem ($id,$data) {
        $item = Menu::findOrFail($id);
        if (!empty($data['parent'])) $data['parent_id'] = $data['parent']['id'];
        $item->update($data);
    }

    public function parent () {
        return $this->belongsTo(Menu::class, 'parent_id')->select(['id','name']);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Menu::class, 'parent_id')->with('childrenCategories')->orderBy('sort_number', 'ASC');
    }


}
