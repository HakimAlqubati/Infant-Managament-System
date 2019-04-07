@extends('layouts.app')



@section('content')
<div class="container" >
<div class="tab-pane">
            <div class="form-group row">
            <table class="table table-sm table-hover table-reflow">
                <thead>
                <tr class="table-danger">
                    <th ><strong>No: </strong></th>
                    <th ><strong> First Name: </strong></th>
                    <th><strong>Last Name: </strong></th>
                    <th><strong> Email: </strong></th>
                    <th><strong>Birthrate: </strong></th>
                    <th><strong>Education Level: </strong></th>
                    <th><strong>Created At: </strong></th>
                    <th><strong>Updated At: </strong></th>

                </tr>
                </thead>
                <tbody>
                @foreach($children as $child)

                    <tr>
                        <td>#</td>
                        <td>{{ $child->f_name }} </td>
                        <td>{{ $child->l_name }} </td>
                        <td>{{ $child->email }} </td>
                        <td>{{ $child->brith_day }} </td>
                        <td>{{ $child->level_educ }} </td>
                        <td>{{ $child->created_at }} </td>
                        <td>{{ $child->updated_at }} </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
    <form method="POST"  class="col-md-12 bounceInRight" action="child"enctype="multipart/form-data">
        {{csrf_field()}}
        <input id="center_id" type="hidden" class="form-control"
                   name="center_id" value="{{$id}}"
                     required autofocus>
            <div class="form-group row">

        <div class="col-md-8">
                    <input id="f_name" type="text" placeholder="First Name" class="form-control"
                           name="f_name" value="{{ old('f_name') }}" required autofocus>
        </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">
                    <input id="l_name" type="text" placeholder="Last Name" class="form-control"
                           name="l_name" value="{{ old('l_name') }}" required autofocus>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">
                    <input id="brith_day" type="text" placeholder="Brith Date: " class="form-control"
                           name="brith_day" value="{{ old('brith_day') }}" required autofocus>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">
                    <input id="level_educ" type="text" placeholder="Level Of Education" class="form-control"
                           name="level_educ" value="{{ old('level_educ') }}" required autofocus>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">
                    <input id="gender" type="text" placeholder="Gender" class="form-control"
                           name="gender" value="{{ old('gender') }}" required autofocus>

                </div>
            </div>

            <div class="btn-group row col-md-4  ">
                <button type="button" class="btn  btn-danger  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">
                    Select Parents for Children:
                </button>
                    <select id="user_id" name="user_id" class="dropdown-toggle"
                            onchange="document.getElementById('user_id').submit()">
                        <option class="custom-select-lg" value="-"></option>
                        @foreach($users as $user)
                            <option class="custom-select-lg" value="{{$user->id}}">{{$user->first_name}} </option>
                        @endforeach
                    </select>
            </div>
        <div class="btn-group row col-md-4  ">
            <button type="button" class="btn  btn-danger  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">
                Select Type OF Parent:
            </button>
            <select id="parent_type_id" name="parent_type_id" class="dropdown-toggle"
                    onchange="document.getElementById('parent_type_id').submit()">
                <?php
                $parents_types=\App\Parenttype::all();
                ?>
                    <option class="custom-select-lg" value="-"></option>
                @foreach ($parents_types  as $prnt)
                        <option class="custom-select-lg" value="{{$prnt->id}}">{{$prnt->name}} </option>
                    @endforeach

{{--                @foreach($users as $user)--}}
{{--                @endforeach--}}
            </select>
        </div>

            </br>

        <br>

            <div class="form-group row mb-8">
                <div class="col-md-12 offset-md-6">
                    <button type="submit" class="btn btn-primary">
                        Add Child
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
    @endsection
