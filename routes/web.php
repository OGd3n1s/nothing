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
    return view('Moderna.index');
})->name('/');



Route::get('/index', function () {
    return view('Moderna.index');
})->name('/');


Route::get('/blog', function () {
    return view('Moderna.blog');
})->name('/');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
