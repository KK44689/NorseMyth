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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/searchGod', 'App\Http\Controllers\PostsController@search');
Route::get('/searchOther', 'App\Http\Controllers\OthersController@search');
// Route::get('/gods&goddess', 'App\Http\Controllers\PagesController@gods');

Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::resource('others', 'App\Http\Controllers\OthersController');

