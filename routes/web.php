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
    return "This is the Home page for Coursework 348";
});

Route::get('/posts', function ($post) {
    return "This is the Post page for Coursework 348";
    return view(['post' => $post]);
});

Route::get('/user', function ($user) {
    return "This is the User page for Coursework 348";
});
