<?php

namespace App\Api\V1\Controllers;

use App\Feedback;
use App\Http\Resources\SocialMediaResource;
use App\SocailMedia;
use Illuminate\Http\Request;

class SocailMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socialMedia = SocailMedia::all();
        if(count($socialMedia)>0){
            return SocialMediaResource::collection($socialMedia);
        }else{
            return response()->json(['status'=>false,'message'=>'Something is not good']);
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
        $socialMedia = new SocailMedia();
        $socialMedia->name = $request->name;
        $socialMedia->url = $request->url;
        if($socialMedia->save()){
            return response()->json(['status'=>true,'message'=>'Social media is saved successfully']);
        }else{
            return response()->json(['status'=>false,'message'=>'Something is not good']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocailMedia  $socailMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocailMedia $socailMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocailMedia  $socailMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocailMedia $socailMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocailMedia  $socailMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocailMedia $socailMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocailMedia  $socailMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocailMedia $socailMedia)
    {
        //
    }
}
