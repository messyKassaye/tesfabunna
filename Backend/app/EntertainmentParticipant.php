<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntertainmentParticipant extends Model
{
    //

    public function entertainment(){
        return $this->belongsTo(Entertainment::class);
    }

    public function essay(){
        return $this->belongsTo(Essay::class);
    }
}
