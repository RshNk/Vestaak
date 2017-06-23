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

Route::get('/services/consult', function () {
    return view('services.consult');
});

Route::get('/services/elearn', function () {
    return view('services.elearn');
});

Route::get('/services/courses', function () {
    return view('services.courses');
});

Route::get('/services/needs', function () {
    return view('services.needs');
});

Route::get('/services/telebot', function () {
    return view('services.telebot');
});

Route::get('/services/hrm', function () {
    return view('services.hrm');
});

Route::get('/services/bills', function () {
    return view('services.bills');
});

Route::get('/services/todo', function () {
    return view('services.todo');
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
