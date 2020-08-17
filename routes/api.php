<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'as' => 'api.'], function(){
    Route::post('auth/login', 'AuthController@login');
    Route::post('me', 'AuthController@me');
    Route::post('cliente/{id}', 'ClienteController@show');
});
