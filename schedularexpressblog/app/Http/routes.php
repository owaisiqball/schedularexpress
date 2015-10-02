<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('posts','PostsController');
Route::get('/new-post','BlogController@newpost');
Route::get('/blog','BlogController@index');
Route::get('/blog/{slug}','BlogController@single');
Route::get('/posts/{id}/delete','PostsController@delete');
