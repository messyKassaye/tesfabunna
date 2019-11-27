<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    //

    public function entertainment(){
        return $this->belongsToMany(Entertainment::class);
    }
}
