<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    //

    public function essay(){
        return $this->belongsTo(Essay::class);
    }
    public function programme(){
        return $this->belongsTo(Entertainment::class);
    }
}
