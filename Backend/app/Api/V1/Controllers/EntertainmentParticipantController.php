<?php

namespace App\Api\V1\Controllers;

use App\Entertainment;
use App\EntertainmentParticipant;
use App\Http\Resources\EntertainmentParticipantResource;
use Illuminate\Http\Request;

class EntertainmentParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $entertainment = Entertainment::where('status',true)->get();
        if(count($entertainment)>0){
            return new EntertainmentParticipantResource($entertainment);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntertainmentParticipant  $entertainmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function show(EntertainmentParticipant $entertainmentParticipant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntertainmentParticipant  $entertainmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function edit(EntertainmentParticipant $entertainmentParticipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntertainmentParticipant  $entertainmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntertainmentParticipant $entertainmentParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntertainmentParticipant  $entertainmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntertainmentParticipant $entertainmentParticipant)
    {
        //
    }
}
