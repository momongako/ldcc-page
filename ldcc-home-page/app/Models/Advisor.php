<?php


namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Advisor extends Authenticatable
{
    protected $fillable = [
        'access_token',
        'token_type',
        'expires_in',
        'userName',
        'ProviderId',
        'CustomerId',
        'EmployeeId',
        "Role",
        "user_id_db",
        'FullName',
        'ProfileImageURL',
        '.issued',
        '.expires'
    ];
}
