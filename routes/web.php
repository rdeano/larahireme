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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('ajax/createQuery','AjaxController@createQuery');
Route::get('ajax/selectQuery','AjaxController@selectQuery');


Route::resource('profile','ProfileController');
Route::resource('category','CategoryController');

// Route::resource('ajax','AjaxController');
// Route::resource('ajax','AjaxController');
