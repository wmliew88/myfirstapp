<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // One to One relation
    public function post()
    {
        return $this->hasOne('App\Post'); //user_id from routes

    }

    // one to many
    public function posts()
    {
        return $this->hasMany('App\Post'); //user_id from routes

    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withPivot('created_at'); //many to many
        //to customize tables and column follow table below
//        return $this->belongsToMany('App\Role','role_user','user_id','role_id'); //user_id from routes
    }
}
