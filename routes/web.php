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
    return view('welcome');
});


Route::get('cars', 'CarController@index');
Route::get('cars/{id}', 'CarController@show');
Route::post('cars', 'CarController@store');
Route::put('cars/{id}', 'CarController@store');
Route::delete('cars/{id}', 'CarController@destroy');

Route::get('/carsbymodel/{model_id}', 'CarController@getByModel');

Route::get('/brands', 'BrandController@index');

Route::get('/models', 'ModelTableController@index');
Route::get('/modelsbybrand/{brand_id}', 'ModelTableController@getByBrand');