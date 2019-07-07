<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/{id}/update', 'UserController@update')->name('user.update');
Route::get('/user/{id}/delete', 'UserController@delete')->name('user.delete');

Route::get('categories', 'CategoryController@index')->name('categories');
Route::get('createCategory', 'CategoryController@display_category_create_page')->name('create.category');
Route::post('category/store', 'CategoryController@store')->name('store.category');
Route::get('category/{id}/edit', 'CategoryController@edit')->name('edit.category');
Route::post('category/{id}/update', 'CategoryController@update')->name('update.category');
Route::get('category/{id}/destroy', 'CategoryController@destroy')->name('destroy.category');

Route::get('category/{id}/words', 'WordController@index')->name('words');
Route::get('category/{id}/addWord', 'WordController@add')->name('add.word');
Route::post('category/{id}/addWord/store', 'WordController@store')->name('store.word');
Route::get('category/{id}/word/{word_id}/edit', 'WordController@edit')->name('edit.word');
Route::post('category/{id}/word/{word_id}/update', 'WordController@update')->name('update.word');
Route::get('category/{id}/word/{word_id}/destroy', 'WordController@destroy')->name('destroy.word');

