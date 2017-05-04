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
    return view('index');
});

Route::get('/Not-found', function () {
    return view('404');
});


Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/services/web', function () {
    return view('services.webDesign');
});

Route::get('/services/app', function () {
    return view('services.appDesign');
});

Route::get('/services/young', function () {
    return view('services.young');
});


/*------blog parts-------*/
Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/blog/1', function () {
    return view('blog.blog1');
});

Route::get('/blog/2', function () {
    return view('blog.blog2');
});


Route::get('/blog/3', function () {
    return view('blog.blog3');
});
