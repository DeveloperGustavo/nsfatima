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
Route::get('/update/{id}', 'PeopleController@viewUpdate')->name('viewUpdate');
Route::post('/update/{id}', 'PeopleController@update')->name('peopleUpdate');
Route::post('/delete/{id}', 'PeopleController@delete')->name('delete');
Route::post('/home', 'PeopleController@create')->name('create');
