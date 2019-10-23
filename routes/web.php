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

Route::get('/', function () {

    //get all Data From DB
    $posts = \App\Post::get();
    $posts = \App\Post::get();

    $data = [
        'myposts' => $posts,
        'title' => 'Home',
    ];

    return view('pages.home', $data);

});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/aboutus', function () {
return view('pages.aboutus');
});



Route::get('/blog/{id}', function ($id) {
return view('pages.blog--single');
});

