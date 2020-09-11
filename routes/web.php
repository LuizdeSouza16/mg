<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PublicController@index');
Route::get('/noticia/{post}','PublicController@show')->name('noticia');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('tag', 'TagController')->middleware('auth');
Route::resource('post', 'PostController')->middleware('auth');

Auth::routes();
