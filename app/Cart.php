<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    public  function  category(){
        return $this->belongsToMany('App\Category');
    }
    public  function  hardware(){
        return $this->belongsToMany('App\HardWare');
    }
    public  function tag(){
        return $this->belongsToMany('App\Tag');
    }
    public  function  laptop(){
        return $this->belongsToMany('App\Laptop');
    }
}
