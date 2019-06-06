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
    $request->headers->set('Accept', 'application/json');
    return $request->user();
});


Route::post('/login', 'Api\AuthController@login')->name('login.api');
Route::post('/register', 'Api\AuthController@register')->name('register.api');

Route::post('/songs/upload', 'Api\Songs\UploadController@execute')->name('songs.upload');

Route::middleware('auth:api')->group(function() {
    Route::get('/logout', 'Api\AuthController@logout')->name('logout');
});