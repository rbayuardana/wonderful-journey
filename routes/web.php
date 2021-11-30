<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
Route::get('/', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/myblog', 'ArticlesController@blogs')->middleware('auth');
Route::get('/cats/{category_id}', 'ArticlesController@cats');
Route::get('/alluser', 'UsersController@index')->middleware('isAdmin','auth');
Route::delete('/userdelete/{user}', 'UsersController@destroy');
Route::get('/myblog/newblog', 'ArticlesController@create')->middleware('auth');
Route::POST('/myblog/newblog/submit', 'ArticlesController@store')->middleware('auth');
Route::delete('/blogdelete/{article}', 'ArticlesController@destroy')->middleware('auth');
Route::get('/editprofile', 'UsersController@edit')->middleware('auth');
Route::patch('/editprofile', 'UsersController@update')->middleware('auth');



// Route::get('/threads', 'ThreadController@index');
// Route::get('/update/{id}', 'ThreadController@edit')->middleware('isAdmin');
