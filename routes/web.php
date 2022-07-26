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

Route::get('/', 'PagesController@landing');
Route::post('/home/upload_file', 'UploadController@upload_file');
Route::get('/home/upload_file', 'UploadController@upload_file');
Route::post('/home/mulai', 'UploadController@submit');
Route::get('/home', 'PagesController@home');
Route::get('/result', 'PagesController@result')->name('result');
Route::get('/login', 'PagesController@login');



Auth::routes();

Route::get('/dashboard', 'DatasController@index')->name('dashboard');
// Route::post('/dashboard/up_file', 'DatasController@up_file');
Route::post('/dashboard/store', 'DatasController@store')->name('dashboard.store');
Route::delete('/dashboard/{data}', 'DatasController@destroy')->name('dashboard.destroy');
// Route::put('/dashboard/{data}', 'DatasController@update');
Route::resource('dashboard','DatasController');

