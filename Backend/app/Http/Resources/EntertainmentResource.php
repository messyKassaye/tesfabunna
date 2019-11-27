<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntertainmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'template_image'=>$this->template_image,
            'episode'=>$this->episode,
            'status'=>$this->status,
            'programmes'=>$this->essay,
            'guests'=>GuestResource::collection($this->guest),
            'participant'=>EntertainmentParticipantResource::collection($this->participants)
        ];
    }
}
