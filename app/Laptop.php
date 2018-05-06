<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    //

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function hardware()
    {
        return $this->belongsTo('App\HardWare');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function cart()
    {
        $this->belongsToMany('App\Cart');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
