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
Route::resource('/pesquisa', 'App\Http\Controllers\pesquisaController');
Route::get('/pesquisa', 'App\Http\Controllers\pesquisaController@index')->name('index');
Route::post('/pesquisa', 'App\Http\Controllers\pesquisaController@store')->name('registrar_novo');
Route::get('/create', 'App\Http\Controllers\pesquisaController@create')->name('cr_novo');






