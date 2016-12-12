<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts()
    {
        return $this->hasManyThrough('App\Post','App\User','country_id','user_id'); //country id refer to app\user, user_id refer to app\post
    }
}
