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

Route::get('/register',[\App\Http\Controllers\UserController::class,'showRegister'])->name('register');
Route::post('/register',[\App\Http\Controllers\UserController::class,'register']);
Route::get('/login',[\App\Http\Controllers\UserController::class,'showLogin']);
Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::post('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');

Route::middleware('auth')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'profile'])->name('profile');
    Route::get('/profile/edit',[\App\Http\Controllers\UserController::class,'edit'])->name('profile.edit');
    Route::post('/profile/edit',[\App\Http\Controllers\UserController::class,'update'])->name('profile.update');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('items', 'App\Http\Controllers\Admin\ItemsController')->except('show');
    
    Route::resource('makers', 'App\Http\Controllers\Admin\MakersController')->except(['show']);
    Route::resource('cars', 'App\Http\Controllers\Admin\CarsController')->except(['show']);
    Route::resource('specs', 'App\Http\Controllers\Admin\SpecsController')->except(['show']);
    Route::resource('categories', 'App\Http\Controllers\Admin\CategoriesController')->except(['show']);
    Route::resource('colors', 'App\Http\Controllers\Admin\ColorsController')->except(['show']);
    Route::resource('factories', 'App\Http\Controllers\Admin\FactoriesController')->except(['show']);
    Route::resource('shippings', 'App\Http\Controllers\Admin\ShippingsController')->except(['show']);
    
    Route::resource('mail_templates', 'App\Http\Controllers\Admin\MailTemplatesController')->except(['show']);
});

Route::group(['prefix' => 'products', 'as' => 'products.'], function() {
    Route::view('/', 'products.index')->name('index');
    Route::get('/{company}/{name}', 'App\Http\Controllers\Products\PageController@products');
    Route::get('/{company}', 'App\Http\Controllers\Products\PageController@company');
});

Route::resource('cart', 'App\Http\Controllers\CartController');

Route::resource('order', 'App\Http\Controllers\OrderController');