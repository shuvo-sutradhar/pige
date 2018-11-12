<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'account_type', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    // Check if the user role is admin
    public function isAdmin()
    {
        return ($this.account_type == 1) ? true : false;
    }

    // Check if the user role is personal
    public function isPersonal()
    {
        return ($this.account_type == 0) ? true : false;
    }

    // Check if the user role is business
    public function isBusiness()
    {
        return ($this.account_type == 0) ? true : false;
    }
}
