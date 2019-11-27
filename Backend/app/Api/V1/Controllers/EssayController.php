<?php

namespace App\Api\V1\Controllers;

use App\Essay;
use App\Http\Resources\EssayResource;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $essay = Essay::all();
        if ($essay){
            return EssayResource::collection($essay);
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
        $essay = new Essay();
        $essay->name = $request->name;
        if($essay->save()){
            return response()->json(['status'=>true,'message'=>'Essay is created successfully']);
        }else{
            return response()->json(['status'=>false,'message'=>'Something is not good.']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function show(Essay $essay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function edit(Essay $essay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Essay $essay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Essay $essay)
    {
        //
    }
}
