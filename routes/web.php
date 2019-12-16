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

Route::get('/contact', 'ContactController@show')->name('Contact');

Route::get('/over', 'AboutController@show')->name('Over');

Route::get('/bedrijven', 'BedrijvenController@list')->name('bedrijven.list');
Route::get('/bedrijven/{id}', 'BedrijvenController@details')->name('bedrijven.details');

Route::get('/cms', 'ProductController@create')->name('CMS');
Route::get('/cms/edit/{id}', 'ProductController@edit')->name('CMS-edit');
Route::post('/cms/edit/{id}', 'ProductController@edit')->name('CMS-edit.store');
Route::post('/cms', 'ProductController@store')->name('CMS.store');

// id = anything
Route::get('/product/{id}', 'ProductController@show')->name('product');

// Numbers only
// Route::get('/posts/{id}', 'ProductController@showPost')->where('id', '[0-9]+');

// Text only
//Route::get('/posts/{id}', 'ProductController@showPost')->where('id', '[A-Za-z]+ .-')->name('Post');

// id = number, name = text
// Route::get('/posts/{id}/{name}', 'ProductController@showPost')->where(array('id' => '[0-9]+', 'name' => '[a-z]+'));

Route::fallback('NotFoundController@show')->name('404');
