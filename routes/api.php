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

Route::group(['namespace'=>'API'], function(){
  Route::post('auth/login', 'Auth\LoginController@login');
  Route::post('auth/register', 'Auth\LoginController@register');

  Route::group(['namespace'=>'Farm', 'prefix' => 'farm', 'middleware'=>'auth:api'], function(){
    Route::get('data/{id}', 'Data\FarmController@getInfo');
  });
});
