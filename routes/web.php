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

Route::get('/index', function () {
    return view('welcome');
});


Route::get('/pistes', 'PistesController@index')->name('pistes.index');
Route::post('/pistes', 'PistesController@store');
Route::get('/pistes/create', 'PistesController@create')
    ->name('pistes.create')
    ->middleware('auth');
Route::get('/pistes/{piste}', 'PistesController@show')->name('pistes.show');
Route::get('/pistes/{piste}/edit', 'PistesController@edit')
    ->name('pistes.edit')
    ->middleware('auth');
Route::put('/pistes/{piste}', 'PistesController@update');


Route::get('/units', 'UnitsController@index')->name('units.index');
Route::post('/units', 'UnitsController@store');
Route::get('/units/create', 'UnitsController@create')
    ->name('units.create')
    ->middleware('auth');
Route::get('/units/{unit}', 'UnitsController@show')->name('units.show');
Route::get('/units/{unit}/edit', 'UnitsController@edit')
    ->name('units.edit')
    ->middleware('auth');;
Route::put('/units/{unit}', 'UnitsController@update');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')
    ->name('dashboard')
    ->middleware('auth');
