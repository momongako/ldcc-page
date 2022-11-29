<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Career extends Model
{
    protected $table = 'careers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'message',
        'path',
        'file_name'
    ];

    public function getList ($params) {
        $items = Career::where('name','<>','');
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $items->whereRaw('((`name` like ?))',
                [$keyword]
            );
        }

        $items->orderBy('created_at', 'desc');
        return $items;
    }
}
