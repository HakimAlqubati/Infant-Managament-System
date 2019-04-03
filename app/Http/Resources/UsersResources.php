<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UsersResources extends Resource
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
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ];
    }
}
