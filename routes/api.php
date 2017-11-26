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

  Route::middleware('auth:api')->post('profile/{id}', 'UserController@updateInfo');
  Route::middleware('auth:api')->post('profile', 'UserController@showProfile');

  Route::group(['namespace'=>'Farm', 'prefix' => 'farm', 'middleware'=>'auth:api'], function(){
    Route::get('data/{id}', 'Data\FarmController@getInfo');
    Route::post('data/{id}', 'Data\FarmController@updateInfo');
    Route::get('data/realization-detail/{id}', 'Data\FarmController@getReliazationdetail');
    Route::get('data/harvest/{id}', 'Data\FarmController@getRealizationharvest');

    Route::group(['prefix'=>'monev', 'namespace' => 'Monev'], function(){
      Route::post('realisasi', 'RealisasiController@getRealisasi');
      Route::post('rencana', 'RealisasiController@getRencana');
      Route::get('realisasi/{id}', 'RealisasiController@getRealisasidetail');
    });
  });
  Route::group(['prefix'=>'balance','namespace'=>'Balance','middleware'=>'auth:api'], function(){
    Route::post('data', 'BalanceController@getBalance');
  });
});
