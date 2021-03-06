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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('contact', 'ContactController@create')->name('contact.create');
//Route::post('contact', 'ContactController@store')->name('contact.store');
//Route::get('contact', 'ContactController@store')->email('email.create');
//Route::post('contact', 'ContactController@store')->email('email.store');
//Route::get('contact', 'ContactController@store')->message('message.create');
//Route::post('contact', 'ContactController@store')->message('email.stores');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
