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
    return view('blog.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/blog','Blog@index');
Route::get('/blog/{slug}','Blog@detail');
Route::get('/blog/kategori/{kategori}','Blog@kategori');
// Route::get('/', function()
// {
// 	return Share::load('http://www.example.com', 'My example')->twitter();
// });