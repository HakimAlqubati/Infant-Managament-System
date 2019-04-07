<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//center::
Route::apiResource('/center','CenterController');


Route::group(['prefix'=>'center'],function()
{
    Route::apiResource('/{center}/users','UsersController');
    Route::apiResource('/{center}/child', 'ChildrenController');

});




//showing users according center_id:

//child
//Route::apiResource('/child', 'ChildrenController');

