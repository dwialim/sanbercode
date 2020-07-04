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

Route::get('/','HomeController@index');

Route::get('/pertanyaan	','PertanyaanController@index')->name('tanya');
Route::get('/pertanyaan/create','PertanyaanController@create')->name('buat');
Route::post('/pertanyaan','PertanyaanController@store')->name('masuk');
Route::get('/pertanyaan/{id}', 'PertanyaanController@detail');
Route::put('/pertanyaan/{id}/edit', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');

Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');