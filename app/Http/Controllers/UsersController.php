<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UsersResources;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\User;
use Illuminate\Support\Facades\Auth;

class  UsersController extends Controller
{

    public function index($center)
    {
        return User::all()->where('center_id',$center);
    }


    public function show($user){
        return $user;
         //return new UsersResources($user);
    }
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
    public function update(UserRequest $request,$id)
    {
       // return $request;
        if(Auth::user()->id = $id)
        {
            $user= new User;
            $user->name = $request->name;
            $user->email= $request->email;
            $user->phone= $request->phone;
            $user->address= $request->address;
            $user->media= $request->media;
            $user->profile= $request->profile;
            $user->save();
            return response([
                'data'=>new UserRequest($user)
            ],Response::HTTP_CREATED);
        }
        else
            {
                return 'Dont have any perimission..';
            }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
