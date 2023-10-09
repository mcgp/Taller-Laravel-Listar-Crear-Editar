<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mascotas', 'MascotasController@index');
Route::get('/mascotas/create', 'MascotasController@create');
Route::post('/mascotas', 'MascotasController@store');
Route::get('/mascotas/{id}', 'MascotasController@show');
Route::get('/mascotas/{id}/edit', 'MascotasController@edit');
Route::put('/mascotas/{id}', 'MascotasController@update');
Route::delete('/mascotas/{id}', 'MascotasController@destroy');

*/



Route::resource('mascotas', 'App\Http\Controllers\MascotasController');



