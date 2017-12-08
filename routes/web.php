<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/category/add-category', 'CategoryController@index');
Route::post('/category/new-category', 'CategoryController@saveCategoryInfo');

