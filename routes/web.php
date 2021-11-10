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

Route::get('/', 'App\Http\Controllers\HomeController@welcome');
Route::post('/contact/send', 'App\Http\Controllers\HomeController@sendContact');


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
    Route::get('/carrusel/images/{setLang}', 'App\Http\Controllers\Admin\CarruselController@images');
    Route::post('/carrusel/images/{setLang}', 'App\Http\Controllers\Admin\CarruselController@images');

    Route::get('/carrusel/image/destroy/{id}/{setLang}', 'App\Http\Controllers\Admin\CarruselController@destroyImage');

    Route::resource('/cursos', 'App\Http\Controllers\Admin\CursosController');
    Route::get('/cursos/image/destroy/{id}/{setLang}', 'App\Http\Controllers\Admin\CursosController@destroyImage');

    Route::resource('/terapias', 'App\Http\Controllers\Admin\TerapiasController');
    Route::get('/terapias/image/destroy/{id}/{setLang}', 'App\Http\Controllers\Admin\TerapiasController@destroyImage');

    Route::resource('/talleres', 'App\Http\Controllers\Admin\TalleresController');
    Route::get('/talleres/image/destroy/{id}/{setLang}', 'App\Http\Controllers\Admin\TalleresController@destroyImage');

    Route::resource('/libros', 'App\Http\Controllers\Admin\LibrosController');
    Route::get('/libros/image/destroy/{id}/{setLang}', 'App\Http\Controllers\Admin\LibrosController@destroyImage');

    Route::resource('/contacto', 'App\Http\Controllers\Admin\ContactoController');
});
