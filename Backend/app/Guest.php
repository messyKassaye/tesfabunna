<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //

    public function entertainment(){
        return $this->belongsTo(Entertainment::class);
    }
}
