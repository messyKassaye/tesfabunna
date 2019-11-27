<?php

namespace App\Api\V1\Controllers;

use App\Entertainment;
use App\Http\Resources\EntertainmentResource;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entertainment = Entertainment::all();
        if($entertainment!==null){
            return EntertainmentResource::collection($entertainment);
        }else{
            return  response()->json(['status'=>false,'message'=>'There is no created entertainment']);
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
        $entertainment = new Entertainment();
        $entertainment->name = $request->name;
        $entertainment->template_image = $request->template_image;
        $entertainment->description = $request->description;
        $entertainment->episode = $request->episode;
        if($entertainment->save()){
            return response()->json(['status'=>true,'message'=>'Successfully created']);
        }else{
            return response()->json(['status'=>false,'message'=>'Successfully created']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $entertainment = Entertainment::find($id);
        if($entertainment){
            return  new EntertainmentResource($entertainment);
        }else{
            return response()->json(['status'=>false,'message'=>'There is no entertainment data']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function edit(Entertainment $entertainment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entertainment $entertainment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entertainment $entertainment)
    {
        //
    }
}
