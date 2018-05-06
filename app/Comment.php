<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function  laptop(){
        return $this->belongsTo('App\Laptop');
    }
}
