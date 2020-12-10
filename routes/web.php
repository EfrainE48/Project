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
//Route::resource ('nombreRuta', 'nombreControlador');
Route::resource('movies','MoviesController');
Route::resource('functions','FunctionsController');
Route::resource('rooms','RoomsController');
Route::resource('entraces','EntracesController');
Route::resource('consumables','ConsumablesController');
Route::get('movies.viewTable','MoviesController@viewTable');
Route::get('consumables.viewTable','ConsumablesController@viewTable');


Route::get('graficas.graficaEntraces','GraficasController@graficarEntraces')->name('entraces.grafica');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
