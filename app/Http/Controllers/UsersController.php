<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResources;
use Illuminate\Http\Request;
use App\User;

class  UsersController extends Controller
{

    public function index()
    {
        return User::all();
    }


    public function show(Request $request){
         return new UsersResources($request);
    }
}
