<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurpriseParticipator extends Model
{
    //

    public function surprise(){
        return $this->belongsTo(Surprise::class);
    }
}
