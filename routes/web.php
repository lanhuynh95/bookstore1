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

Route::get('home','BookController@index')->name('home');;
Route::post('home','BookController@vote');
Route::get('index','BookController@home');

Route::get('news','NewsController@index');

Route::get('category','CategoriesController@index')->name('category.index');

Route::get('admin/news/add','NewsController@create');
Route::post('admin/news/add','NewsController@store');

Route::get('admin/category/add','CategoriesController@create');
Route::post('admin/category/add','CategoriesController@store');

// Route::get('api/book', 'ApiController@test');
// Route::post('api/book', 'ApiController@createBook');-

Route::group(['prefix' => 'api'], function () {
    Route::resource('users', 'UserController');    
});
Route::view('/{any}', 'welcome')
    ->where('any', '.*');