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

Route::get('/', function () {
    return view('tops.top');
});

Route::get('/search', function () {
    return view('tops.search');
});
Route::get('/search_result', 'SearchController@index')->name('searches.index');
Route::get('/search_show/{id}', 'SearchController@show')->name('searches.show');

Route::get('/records_show', function () {
    return view('records.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/records', 'MemoController@index')->name('records.index')->middleware('auth');

Route::get('/records_create', 'MemoController@create')->name('records.create')->middleware('auth');

Route::post('/records', 'MemoController@store')->name('records.store');

Route::get('/records/{id}', 'MemoController@show')->name('records.show')->middleware('auth');

Route::get('/records/{id}/edit', 'MemoController@edit')->name('records.edit')->middleware('auth');

Route::put('/records/{id}', 'MemoController@update')->name('records.update');

Route::delete('/records/{id}', 'MemoController@destroy')->name('records.destroy');