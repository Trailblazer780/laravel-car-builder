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
    return view('builder.builder');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --------------------------------------------------------------------------- Routes for Car Builder
Route::get('/builder', 'App\Http\Controllers\Builder\BuilderController@index')->name('builder');
Route::post('/builder/store', 'App\Http\Controllers\Builder\BuilderController@store')->name('builder.store');
Route::get('/builder/fullbuild/{build}', 'App\Http\Controllers\Builder\BuilderController@show')->name('builder.fullbuild');

// --------------------------------------------------------------------------- Routes for Parts
Route::get('/api/parts', 'App\Http\Controllers\APIController@index')->name('api.parts');
Route::get('/api/parts/cars', 'App\Http\Controllers\APIController@cars')->name('api.parts.cars');
Route::get('/api/parts/engine', 'App\Http\Controllers\APIController@engine')->name('api.parts.engine');
Route::get('/api/parts/brakes', 'App\Http\Controllers\APIController@brakes')->name('api.parts.brakes');
Route::get('/api/parts/suspension', 'App\Http\Controllers\APIController@suspension')->name('api.parts.suspension');
Route::get('/api/parts/body', 'App\Http\Controllers\APIController@body')->name('api.parts.body');
Route::get('/api/parts/exhaust', 'App\Http\Controllers\APIController@exhaust')->name('api.parts.exhaust');
Route::get('/api/parts/transmission', 'App\Http\Controllers\APIController@transmission')->name('api.parts.transmission');


// --------------------------------------------------------------------------- Routes for part CRUD
Route::get('/admin/add', 'Admin\PartController@create')->name('parts.add');
Route::put('/admin/update/{part}', 'Admin\PartController@update')->name('parts.update');
Route::post('/admin/add', 'Admin\PartController@store')->name('parts.store');
Route::get('/admin/edit/{part}', 'Admin\PartController@edit')->name('parts.edit');
Route::delete('/admin/destroy/{part}', 'Admin\PartController@destroy')->name('parts.destroy');

// ----------------------------------------------------------------------------- Parts Management
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    // Now we add the routes
    Route::resource('/parts', 'PartController', ['except'=>['show', 'create', 'store']]);
});
