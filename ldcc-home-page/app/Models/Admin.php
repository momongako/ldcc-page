<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordEmail;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
        'email',
        'thumbnail',
        'status',
        'type',
        'created_at',
        'updated_at',
        'api_role',
        'api_provider_id',
        'api_customer_id',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getList ($params) {
        $condition = [];
        foreach ($params as $key => $value) {
            if ($key == 'page' ) {
                continue;
            }
            if ($key == 'first_name' || $key == 'email' || $key == 'last_name') {
                $condition[] = [$key,'like','%'.$value.'%'];
            }
			if($key == '/admin/users'){

			}
			else {
                $condition[] = [$key,$value];
            }
        }
        // 3 : HR  ; 4:Sale
        if (auth()->user()->type == 3){
            $customer = Admin::where($condition)->whereIn('type', [3])->orderBy('created_at', 'desc');
        }
        if (auth()->user()->type == 4){
            $customer = Admin::where($condition)->whereIn('type', [4])->orderBy('created_at', 'desc');
        }
        if (auth()->user()->type == 0){
            $customer = Admin::where($condition)->whereIn('type', [1, 2, 3, 4])->orderBy('created_at', 'desc');
        }

        return $customer;
    }

    public function collection()
    {
        return Admin::all();
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordEmail($token));
    }

    public function posts(){
        return $this->hasMany(Post::class, 'id');
    }
    public function comments() 
    {
        return $this->hasMany(Comment::class, 'id');
    }
}
