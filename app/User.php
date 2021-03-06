<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $connection = 'sqlite';
    protected $table = 'user';
    protected $primaryKey = 'id';

    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];


}
