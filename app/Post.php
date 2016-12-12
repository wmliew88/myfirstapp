<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;


    // for mass configuration
    protected $fillable = [

        'title',
        'content'
    ];

    protected $dates = ['deleted_at'];


    // One to One relation INVERSE
    public function user(){
        return $this->belongsTo('App\User');
    }

}
