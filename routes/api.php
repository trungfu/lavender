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

Route::middleware('auth:api')->namespace('Api')->group(function() {
    Route::get('/songs/init-data', 'Song\PageInitDataController@createSongInitData')->name('songs.init-data');
    Route::post('/songs', 'Song\SongController@store')->name('songs.store');
    Route::get('/songs/upload', 'Song\UploadController@getUploaded')->name('songs.upload');
    Route::post('/songs/upload', 'Song\UploadController@upload')->name('songs.upload');

    Route::get('/logout', 'Api\AuthController@logout')->name('logout');
});