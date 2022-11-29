<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmailNewsletter extends Model
{

    protected $table = 'email_newsletters';
    protected $fillable = [
        'email',
        'name',
        'event_id',
        'status'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $items = DB::table('email_newsletters');
        $items->where('status',1);
        if (!empty($params['event_id'])) {
            $items->where('event_id',$params['tab_id']);
        }
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
    public function createEmail ($data) {
        EmailNewsletter::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateEmail ($id,$data) {
        $customer = EmailNewsletter::findOrFail($id);
        $customer->update($data);
    }


    /**
     * @param $id
     * @param $data
     */
    public function updateDeleteEmail ($id,$data) {
        $config = EmailNewsletter::findOrFail($id);
        $config->update($data);
    }

    public static function getItems ($params) {
        $records = DB::table('email_newsletters')
            ->select('id','name','created_at','email','status','event_id');
        $records->where('status',1);
        if (!empty($params['event_id'])) {
            $records->where('event_id',$params['event_id']);
        }
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $records->whereRaw('((`key` like ?))',
                [$keyword]
            );
        }
        $records = $records->orderBy('created_at', 'desc')->get();

        $results = [];
        foreach ($records as $record) {
            $tmp['id']                  = $record->id;
            $tmp['name']                = $record->name;
            $tmp['email']               = $record->email;
            $tmp['created_at']          = $record->created_at;

            $results[] = $tmp;
        }
        return $results;
    }

}
