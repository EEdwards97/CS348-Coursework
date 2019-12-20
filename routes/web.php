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

Route::get('/home', function () {
    return view('home');
});

Route::get('/posts', function ($user) {
    return "This is the Posts page";
    return view('user', ['post' => $user]);
});

Route::get('posts', 'PostController@index');

Route::get('users', 'UserController@index');

Route::get('comments', 'CommentController@index');

Route::get('posts/{post_title}', 'PostController@show') ->name ('posts.show');

Route::get('users', 'UserController@show');

Route::get('comments', 'CommentController@show');
