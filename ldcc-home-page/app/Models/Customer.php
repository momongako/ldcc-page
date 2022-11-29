<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Customer extends Model
{
    const STATUS_REGISTER = 1;
    const STATUS_DELETED = 2;

    protected $table = 'users';
    protected $fillable = [
        'name', 
        'first_name', 
        'last_name', 
        'password', 
        'email', 
        'status', 
        'year_of_birth', 
        'gender', 
        'subscribe_flag', 
        'subscribe_at',
        'unsubscribe_at',
        'deleted_at', 'province', 
        'created_at',
        'email_verified_at',
        'deactive_at'
    ];
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getList ($params) {
        $status = json_decode($params['status']);
        $customer = DB::table('users')
            ->whereIn('subscribe_flag',json_decode($params['subscribe_flag']));
        if ($params['email_verified_at'] == 'true') {
            if (in_array(self::STATUS_REGISTER,$status)) {
                if (in_array(self::STATUS_DELETED,$status)) {
                    $customer->whereRaw('(email_verified_at is null or status in (1,2))');
                }else {
                    $customer->whereRaw('(email_verified_at is null or status in (1))');
                }
            } else {
                if (in_array(self::STATUS_DELETED,$status)) {
                    $customer->whereRaw('(email_verified_at is null or status in (2))');
                } else {
                    $customer->whereRaw('(email_verified_at is null)');
                }
            }
        } else {
            $customer->whereIn('status',json_decode($params['status']));
            $customer->whereRaw('email_verified_at is not null');

        }
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $customer->whereRaw('((first_name like ?) or (last_name like ?) or (province like ?) )',
                [$keyword,$keyword,$keyword]
            );
        }
        $customer->orderBy('created_at', 'desc');
        return $customer;
    }

    /**
     * get list customer for export csv
     * @param $params
     * @return array
     */
    public static function getCustomers ($params) {
        $status = json_decode($params['status']);
        $records = DB::table('users')->select('id','name', 'first_name', 'last_name', 'password', 'email', 'status', 'year_of_birth', 'gender', 'subscribe_flag', 'subscribe_at','unsubscribe_at','deleted_at', 'province', 'created_at','updated_at','deactive_at')
            ->whereIn('subscribe_flag',json_decode($params['subscribe_flag']));
        if (isset($params['email_verified_at']) && $params['email_verified_at'] == 'true') {
            if (in_array(self::STATUS_REGISTER,$status)) {
                if (in_array(self::STATUS_DELETED,$status)) {
                    $records->whereRaw('(email_verified_at is null or status in (1,2))');
                }else {
                    $records->whereRaw('(email_verified_at is null or status in (1))');
                }
            } else {
                if (in_array(self::STATUS_DELETED,$status)) {
                    $records->whereRaw('(email_verified_at is null or status in (2))');
                } else {
                    $records->whereRaw('(email_verified_at is null)');
                }
            }
        } else {
            $records->whereIn('status',json_decode($params['status']));
            $records->whereRaw('email_verified_at is not null');

        }
        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $records = $records->whereRaw('((first_name like ?) or (last_name like ?) or (province like ?) )',
                [$keyword,$keyword,$keyword]
            );
        }
        $records = $records->orderBy('id', 'asc')->get();

        $results = [];
        foreach ($records as $customer) {
            $tmp['id']                  = $customer->id;
            $tmp['name']                = $customer->name;
            $tmp['year_of_birth']       = $customer->year_of_birth;
            $tmp['age']                 = date('Y') - $customer->year_of_birth;
            $tmp['gender']              = $customer->gender==1?'男性':'女性';
            $tmp['province']            = $customer->province;
            $tmp['email']               = $customer->email;
            $tmp['subscribe_flag']      = $customer->subscribe_flag==1?'する':'しない';
            $tmp['subscribe_at']        = $customer->subscribe_flag?$customer->subscribe_at:$customer->unsubscribe_at;
            $tmp['created_at']          = $customer->created_at;
            $tmp['updated_at']          = $customer->updated_at;
            $tmp['deactive_at']         = $customer->deactive_at;
            $results[] = $tmp;
        }
        return $results;
    }

    /**
     * @param $data
     */
    public function createCustomer ($data) {
        $data['password'] = Hash::make($data['password']);
        $data['name'] = $data['first_name']. ' ' .$data['last_name'];
        if ($data['subscribe_flag']) {
            $data['subscribe_at'] = date("Y-m-d H:i:s");
        }
        $data['email_verified_at'] = date("Y-m-d H:i:s");
        Customer::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateCustomer ($id,$data) {
        $customer = Customer::findOrFail($id);
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
          $data['password'] = $customer->password;
        }
        $data['name'] = $data['first_name']. ' ' .$data['last_name'];
        if ($data['status']) {
            $data['email_verified_at'] = date("Y-m-d H:i:s");
        } else {
            $data['email_verified_at'] = null;
        }
        if ($data['subscribe_flag'] != $customer->subscribe_flag) {
            if ($data['subscribe_flag']) {
                $data['subscribe_at'] = date("Y-m-d H:i:s");
            } else {
                $data['unsubscribe_at'] = date("Y-m-d H:i:s");
            }
        }
        if (! empty($data['check_status'])) {
            if ($data['check_status'] == 2) {
                $data['status'] = 2;
                $data['deactive_at'] = date("Y-m-d H:i:s");
                $data['deleted_at'] = date("Y-m-d H:i:s");
            }
            if ($data['check_status'] == 3) {
                $data['email_verified_at'] = null;
                $data['deactive_at'] = null;
                $data['deleted_at'] = null;
            }
            if ($data['check_status'] == 1) {
                $data['status'] = 1;
                $data['deactive_at'] = null;
                $data['deleted_at'] = null;
            }
        }
        $customer->update($data);
    }

}
