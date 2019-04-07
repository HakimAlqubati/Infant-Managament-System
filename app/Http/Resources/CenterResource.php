<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CenterResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                'name'=>$this->name,
                'onwer_name'=>$this->onwer_name,
                'address'=>$this->address,
                'phone'=>$this->phone,
                'email'=>$this->email,
            ];
    }


}
