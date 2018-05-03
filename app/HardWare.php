<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HardWare extends Model
{
    protected $table='hard_wares';


    public  function  laptop(){
        return $this->hasMany('App\Laptop');
    }
    public function cart(){
        $this->belongsToMany('App\Cart');
    }


    //
}
