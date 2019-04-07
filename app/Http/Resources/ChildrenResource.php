<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChildrenResource extends JsonResource
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
            'first_name'=> $this->f_name,
            'last_name'=> $this->l_name,
            'birth_date'=>$this->brith_day,
            'gender'=>$this->gender,
            'education'=>$this->level_educ,
//            'href'=>
//                [
//                    'link'=>route('/user/{user)',$this->whereHas('users'),function ($q){
//                        $q->whereHas('roles',function ($qu)
//                        {
//                            $qu->where('name','parent')-get();
//                        });
//                    })
//                ]
        ];
    }
}
