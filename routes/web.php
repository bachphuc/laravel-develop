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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'ManageUserController');

Route::group(['prefix' => 'store', 'as' => 'store.'], function(){
    Route::resource('books', 'ManageBookController');

    Route::resource('users.books', 'ManageUserBookController');
});

Route::resource('news', 'ManageNewController');


Route::group(['prefix' => 'my', 'as' => 'my.'], function(){
    Route::resource('books', 'ManageMyBookController');
});