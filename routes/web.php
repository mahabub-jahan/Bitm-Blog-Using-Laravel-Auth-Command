<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/category/add-category', 'CategoryController@index');
Route::post('/category/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/category/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/category/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/category/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/category/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update-category/{id}', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete-category/{id}', 'CategoryController@deleteCategoryInfo');

