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
    return redirect('/categories');
});


Route::resource('/categories', 'CategoriesController'); // BARAHOLKA
Route::resource('/posts', 'PostsController');

Auth::routes();
