<?php

namespace App\Api\V1\Controllers;

use App\Http\Resources\SurpriseResource;
use App\Surprise;
use Illuminate\Http\Request;

class SurpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $surprise = Surprise::all();
        if(count($surprise)>0){
            return SurpriseResource::collection($surprise);
        }else{
            return response()->json(['status'=>true,'message'=>'There is no stored surprise']);
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
        $surprise = new Surprise();
        $surprise->name = $request->name;
        $surprise->picture = $request->picture;
        if($surprise->save()){
            return response()->json(['status'=>true,'message'=>'Surprise is saved']);
        }else{
            return response()->json(['status'=>false,'message'=>'Surprise is not saved']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surprise  $surprise
     * @return \Illuminate\Http\Response
     */
    public function show(Surprise $surprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surprise  $surprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Surprise $surprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surprise  $surprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surprise $surprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surprise  $surprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surprise $surprise)
    {
        //
    }
}
