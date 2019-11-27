<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    //

    public function essay(){
        return $this->belongsToMany(Essay::class);
    }
    public function guest(){
        return $this->hasMany(Guest::class,'entertainment_id');
    }

    public function participants(){
        return $this->hasMany(EntertainmentParticipant::class);
    }
}
