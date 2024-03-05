<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Route::get('/', function () {
    return view('welcome');         ------ MODELO DE ROTA --------
});*/

Route::get('/', ['uses' => '\App\Http\Controllers\Controller@homepage']);
Route::get('/cadastro', ['uses' => '\App\Http\Controllers\Controller@cadastrar']);


/**
 * Routes to user auth
 * ------------------------------------------------------------------------
 */
Route::get('/login', ['uses' => '\App\Http\Controllers\Controller@fazerLogin']);
Route::post('/login', ['as' => 'user.login', 'uses  ' => '\App\Http\Controllers\Controller@login']);
