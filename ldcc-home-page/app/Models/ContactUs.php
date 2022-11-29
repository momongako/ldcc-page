<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactUs extends Model
{
    protected $table = 'contact_us';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'company',
        'message'
    ];

    public function getList ($params)
    {
        $items = ContactUs::where('name','<>','');
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
