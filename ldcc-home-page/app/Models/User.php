<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\VerifyEmail;
use App\Notifications\ConfirmEmail;
use App\Notifications\ResetPasswordEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'name',
        'password',
        'first_name',
        'last_name',
        'year_of_birth',
        'gender',
        'subscribe_flag',
        'subscribe_at',
        'unsubscribe_at',
        'province',
        'status',
        'deactive_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $dates = ['deleted_at', 'created_at', 'updated_at', 'deactive_at'];
    
    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailActivationNotification()
    {
        $this->notify(new VerifyEmail);
    }
    
    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailConfirmationNotification()
    {
        $this->notify(new ConfirmEmail);
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

}
