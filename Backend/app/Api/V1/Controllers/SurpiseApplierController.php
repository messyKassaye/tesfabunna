<?php

namespace App\Api\V1\Controllers;

use App\SurpiseApplier;
use App\Surprise;
use App\SurpriseParticipator;
use Illuminate\Http\Request;

class SurpiseApplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $applier = new SurpriseParticipator();
        $surprise = Surprise::find($request->surprise_id);
        if($surprise->participants()->sync($request->user_id)){
            return  response()->json(['status'=>true,'message'=>'Successfully applied']);
        }else{
            return  response()->json(['status'=>false,'message'=>"Something is not wright"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurpiseApplier  $surpiseApplier
     * @return \Illuminate\Http\Response
     */
    public function show(SurpiseApplier $surpiseApplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurpiseApplier  $surpiseApplier
     * @return \Illuminate\Http\Response
     */
    public function edit(SurpiseApplier $surpiseApplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurpiseApplier  $surpiseApplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurpiseApplier $surpiseApplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SurpiseApplier  $surpiseApplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurpiseApplier $surpiseApplier)
    {
        //
    }
}
