<?php

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
    return view('home');
});

Route::resource('students','StudentController');
Route::resource('dosens','DosenController');
Route::resource('matakuliahs','MatakuliahController');
Route::resource('mengajars','MengajarController');
Route::resource('mengambils','MengambilController');
