<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table='categories';

    public  function  laptop(){
        return $this->hasMany('App\Laptop');
    }
    public function cart(){
        $this->belongsToMany('App\Cart');
    }
}
