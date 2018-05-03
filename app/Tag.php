<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //


    public function  laptop(){
        return $this->belongsToMany('App\Laptop','laptop_tag');
    }

    public function cart(){
        $this->belongsToMany('App\Cart');
    }
    
    
    
    
    
    
}
