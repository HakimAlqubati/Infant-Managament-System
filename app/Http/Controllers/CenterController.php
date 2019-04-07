<?php

namespace App\Http\Controllers;

use App\Center;
use App\Http\Requests\CenterRequests;
use App\Http\Resources\CenterResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $table='center';

    public function index()
    {
      //  return Center::all();
       return CenterResource::collection(Center::all());
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
    public function store(CenterRequests $request)
    {

       // return $request->all();

        $center=new Center;
        $center->name =$request->name;
        $center->email= $request->email;
        $center->onwer_name= $request->onwer_name;
        $center->address=$request->address;
        $center->phone = $request->phone;
        $center->media =$request->media;
        $center->profile = $request->profile;
        $center->notes =$request->notes;

        $center->save();
        return response([
            'data'=>new CenterResource($center)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CenterResource|\Illuminate\Http\Response
     */
    public function show(Center $center)
    {

        return new CenterResource($center);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Center $center)
    {
        $center->update($request->all());

        return response([
            'data'=>new CenterResource($center)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Center $center)
    {
        $center->delete();
        return response([null,],Response::HTTP_NO_CONTENT);
    }
}
