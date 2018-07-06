<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

Route::group([
    'middleware' => 'auth:api'
], function () {
    //
});

Route::get('/v1/test','TestController@index');

// Get all videos
Route::get('/v1/all/mvt','AllVideoController@mostViewed');
Route::get('/v1/all/fv','AllVideoController@featuredVideos');
Route::get('/v1/all/pv','AllVideoController@popularVideos');

// Get Music videos
Route::get('/v1/m/mvt','MusicVideoController@mostViewed');
Route::get('/v1/m/fv','MusicVideoController@featuredVideos');
Route::get('/v1/m/pv','MusicVideoController@popularVideos');

// Get News videos
Route::get('/v1/n/mvt','NewsVideoController@mostViewed');
Route::get('/v1/n/fv','NewsVideoController@featuredVideos');
Route::get('/v1/n/pv','NewsVideoController@popularVideos');

// Get Sport videos
Route::get('/v1/s/mvt','SportVideoController@mostViewed');
Route::get('/v1/s/fv','SportVideoController@featuredVideos');
Route::get('/v1/s/pv','SportVideoController@popularVideos');

//Search videos
Route::get('/v1/search/{param}','CommonVideoController@search');

//Get slider videos
Route::get('/v1/slider','CommonVideoController@slider');

//Send message
Route::post('/v1/message','CommonVideoController@slider');

//Update viewed count
Route::get('/v1/up/{id}','CommonVideoController@updateViewed');
