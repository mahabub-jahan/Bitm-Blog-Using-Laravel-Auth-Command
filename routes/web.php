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



Route::get('/blog/add-blog', 'BlogController@addBlogInfo');
Route::post('/blog/new-blog', 'BlogController@saveBlogInfo');
Route::get('/blog/manage-blog', 'BlogController@manageBlogInfo');
//Route::get('/blog/unpublished-blog/{id}', 'BlogController@unpublishedBlogInfo');
//Route::get('/blog/published-blog/{id}', 'BlogController@publishedBlogInfo');
//Route::get('/blog/edit-blog/{id}', 'BlogController@editBlogInfo');
//Route::post('/blog/update-blog/{id}', 'BlogController@updateBlogInfo');
Route::get('/blog/delete-blog/{id}', 'BlogController@deleteBlogInfo');

