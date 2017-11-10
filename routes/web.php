<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/profiles/{id}', 'ProfileController@profile');

Route::get('/', 'GreetingController@index');

Route::get('/threads', 'ThreadsController@index');

Route::post('/threads', 'ThreadsController@store');

Route::get('/threads/create', 'ThreadsController@create');

Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);