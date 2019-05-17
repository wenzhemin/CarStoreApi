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

// cars
Route::get('cars', 'CarController@index');
Route::get('cars/{id}', 'CarController@show');
Route::post('cars', 'CarController@store');
Route::put('cars/{id}', 'CarController@store');
Route::delete('cars/{id}', 'CarController@destroy');

Route::get('carsbymodel/{model_id}', 'CarController@getByModel');

// brands
Route::get('brands', 'BrandController@index');
Route::get('brands/{id}', 'BrandController@show');
Route::post('brands', 'BrandController@store');
Route::put('brands/{id}', 'BrandController@store');
Route::delete('brands/{id}', 'BrandController@destroy');

// models
Route::get('models', 'ModelTableController@index');
Route::get('models/{id}', 'ModelTableController@show');
Route::post('models', 'ModelTableController@store');
Route::put('models/{id}', 'ModelTableController@store');
Route::delete('models/{id}', 'ModelTableController@destroy');

Route::get('modelsbybrand/{brand_id}', 'ModelTableController@getByBrand');

// colors
Route::get('colors', 'ColorController@index');
Route::get('colors/{id}', 'ColorController@show');
Route::post('colors', 'ColorController@store');
Route::put('colors/{id}', 'ColorController@store');
Route::delete('colors/{id}', 'ColorController@destroy');


// Route::get('/token', 'BrandController@token');

