<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    protected $fillable = [
        'email','username','pasword',  'level',
    ];
    protected $hidden = [
       'password','remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
