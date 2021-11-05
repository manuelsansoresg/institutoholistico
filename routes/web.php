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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web']], function () {

    Route::get('lang/{lang}', function ($lang) {

        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es|fr'
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/cabecera', 'App\Http\Controllers\Admin\CabeceraController');
    Route::get('/cabecera/image/destroy/{id}/{lang}', 'App\Http\Controllers\Admin\CabeceraController@destroyImage');

    Route::resource('/carrusel', 'App\Http\Controllers\Admin\CarruselController');
    Route::get('/carrusel/image/destroy/{id}/{lang}', 'App\Http\Controllers\Admin\CarruselController@destroyImage');

    Route::resource('/cursos', 'App\Http\Controllers\Admin\CursosController');

    Route::resource('/terapias', 'App\Http\Controllers\Admin\TerapiasController');

    Route::resource('/talleres', 'App\Http\Controllers\Admin\TalleresController');
    Route::resource('/libros', 'App\Http\Controllers\Admin\LibrosController');
});
