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
Route::get('/home', 'PagesController@home');
Route::post('/home/upload_file', 'UploadController@upload_file');
Route::get('/home/upload_file', 'UploadController@upload_file');
Route::get('/test', 'PreprocessController@preprocessing');
// Route::get('/home', 'UploadController@upload_file');


