<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', 'App\Http\Controllers\ItemsController')->except('show');

Route::resource('makers', 'App\Http\Controllers\MakersController')->except(['show']);
Route::resource('cars', 'App\Http\Controllers\CarsController')->except(['show']);
Route::resource('specs', 'App\Http\Controllers\SpecsController')->except(['show']);
Route::resource('categories', 'App\Http\Controllers\CategoriesController')->except(['show']);
Route::resource('colors', 'App\Http\Controllers\ColorsController')->except(['show']);
Route::resource('factories', 'App\Http\Controllers\FactoriesController')->except(['show']);
Route::resource('shippings', 'App\Http\Controllers\ShippingsController')->except(['show']);