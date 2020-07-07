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

Route::get('/pertanyaan/detail/{pertanyaan_id}', 'PertanyaanController@detail');
Route::delete('/pertanyaan/detail/{pertanyaan_id}', 'PertanyaanController@destroy');
Route::get('/pertanyaan/detail/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/detail/{pertanyaan_id}/edit', 'PertanyaanController@update')->name('update');

Route::get('/pertanyaan/detail/{pertanyaan_id}/jawaban','JawabanController@index');
Route::post('/pertanyaan/detail/{pertanyaan_id}/jawaban','JawabanController@store');