<?php

namespace App\Http\Controllers;

use App\Center;
use App\Children;
use App\Http\Resources\ChildrenResource;
use App\Parentchildren;
use App\Parenttype;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
class ChildrenController extends Controller
{

    public function index(Center $center)
    {
        $users=User::whereHas('roles',function ($query){
            $query->where('name','parent');
        })->get();

        $id=$center->id;

       $children=Children::all()->where('center_id',$id);

       //return ChildrenResource::collection($children);

       return view('front.addchild',compact('users','children','id'));
    }



    public function create()
    {
        //
    }

    public function store(Request $request, Center $center)
    {
        $child=new Children();
        $child->f_name =$request->f_name;
        $child->l_name =$request->l_name;
        $child->brith_day= $request->brith_day;
        $child->level_educ= $request->level_educ;
        $child->gender= $request->gender;
        $child->center_id= $request->center_id;

        $child->save();
        $users=User::whereHas('roles',function ($query){
            $query->where('name','parent');
        })->get();
        $id=$center->id;
        $children=Children::all()->where('center_id',$id);


        $parent_child=new Parentchildren();
        $parent_child->user_id= $request->user_id;
        $parent_child->parent_type_id=$request->parent_type_id;
        $parent_child->child_id=$child->id;
        $parent_child->note="null";

//        DB::table('parentchildren')->insert([
//            'user_id'=>$request->user_id,
//            'parent_type_id'=>$request->parent_type_id,
//            'child_id'=>$child->id,
//            'note'=>"",
//        ]);
        $parent_child->save();

        return view('front.addchild',compact('users','children','id'));
//        return response([
//            'data'=>new ChildrenResource($child)
//        ],Response::HTTP_CREATED);
    }

    public function show(Children $children)
    {
//        $child = Children::whereHas('users', function($q) use($request) {
//            $q->whereIn('id', $request->id);
//        })->where('center_id',$center);
       // $child=Children::all()->where('center_id',$center->id);
        return new ChildrenResource($children);
       // return new ChildrenResource($child);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
