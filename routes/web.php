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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MahasiswaController@index');
//Mahasiswa (Route dengan detail satu persatu)
Route::get('/mhs', 'MahasiswaController@index')->name('mhs.index');
Route::get('/mhs_list', 'MahasiswaController@mhs_list')->name('mhs_list');
Route::get('/mhs/create', 'MahasiswaController@create');
Route::post('/mhs/store', 'MahasiswaController@store');
Route::get('/mhs/edit/{nim}', 'MahasiswaController@edit');
Route::put('/mhs/update/{mahasiswa:nim}', 'MahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:nim}', 'MahasiswaController@destroy')->name('mhs.delete');
//Skripsi (Route Framework)
Route::get('/Skripsi', 'SkripsiController@index')->name('Skripsi.index');
Route::get('/Skripsi_list', 'SkripsiController@Skripsi_list')->name('Skripsi_list');
Route::get('/Skripsi/create', 'SkripsiController@create');
Route::post('/Skripsi/store', 'SkripsiController@store');
Route::get('/Skripsi/edit/{id}', 'SkripsiController@edit');
Route::put('/Skripsi/update/{Skripsi:id}', 'SkripsiController@update')->name('Skripsi.update');
Route::get('/Skripsi/delete/{Skripsi:id}', 'SkripsiController@destroy')->name('Skripsi.delete');
