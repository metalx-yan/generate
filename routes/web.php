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


// Route::get('/home', 'HomeController@index')->name('home');
    //
// Route::get('/kurikulum', 'CurrciculumController@index')->name('curriculum');

Route::get('/', function() {
	return view('welcome');
});

Auth::routes();

Route::get('/curriculum', 'CurriculumController@index')->name('curriculum');

Route::get('/major', 'MajorController@index')->name('major');

