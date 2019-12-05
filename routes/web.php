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

//Route::get('/', function () {
//    return view('welcome');
//})->name('Welcome');

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/hallo/{naam}', 'HomeController@showName')->name('Hallo');

Route::get('/contact', 'ContactController@showPage')->name('Contact');

// id = anything
Route::get('/posts/{id}', 'PostController@showPost')->name('Post');

// Numbers only
// Route::get('/posts/{id}', 'PostController@showPost')->where('id', '[0-9]+');

// Text only
//Route::get('/posts/{id}', 'PostController@showPost')->where('id', '[A-Za-z]+ .-')->name('Post');

// id = number, name = text
// Route::get('/posts/{id}/{name}', 'PostController@showPost')->where(array('id' => '[0-9]+', 'name' => '[a-z]+'));
