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

    Route::get('/', 'BlogController@index');
    Route::get('/article/{post}', 'BlogController@post');
    Route::post('/article/{post}/comment', 'BlogController@comment')->middleware('auth');
    Route::post('newsletters', 'NewslettersController@store');
    Route::post('mail', 'NewslettersController@mail');
    Auth::routes();
    Route::get('/profile', 'Auth\\ProfileController@index')->middleware('auth');

    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
    Route::resource('/article', 'PostController');
    Route::put('/article/{post}/publish', 'PostController@publish')->middleware('admin');
    Route::resource('/categories', 'CategoryController', ['except' => ['show']]);
    Route::resource('/tags', 'TagController', ['except' => ['show']]);
    Route::resource('/comments', 'CommentController', ['only' => ['index', 'destroy']]);
    Route::resource('/users', 'UserController', ['middleware' => 'admin', 'only' => ['index', 'destroy']]);
});
