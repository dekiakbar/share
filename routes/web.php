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

// Route::get('/', function () {
//     return view('web.index');
// });

Route::group(['domain' => 'blog.fakebook.dev'], function(){
	Route::get('/','Blog@index');
	Route::get('/{slug}','Blog@detail');
	Route::get('/kategori/{kategori}','Blog@kategori');
	Route::get('/tag/{tag}','Blog@tag');
	Route::post('/','Blog@cari');
});

Route::group(['domain' => 'fakebook.dev'], function(){
  	Route::get('/', function () {
    	return view('web.index');
	});

	Route::group(['prefix' => 'admin'], function () {
    	Voyager::routes();
	});

	Route::post('/kirim','EmailCon@kirim');
});