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

// make route to car-builder
// Route::get('/carbuilder/car-builder', 'App\Http\Controllers\CarBuilderController@index')->name('carbuilder.car-builder');

// Route::get('/admin/parts', 'App\Http\Controllers\CarBuilderController@parts')->name('admin.parts');

Route::get('/admin/add', 'App\Http\Controllers\PartController@index')->name('parts.add');

// create route to edit speicifc part

// Route::get('/admin/edit/{id}', 'PartController@edit')->name('parts.edit');

Route::put('/update', 'Admin\PartController@update')->name('parts.update');

// Route::post('/admin/add', 'App\Http\Controllers\CarBuilderController@store')->name('admin.store');

Route::delete('/admin/destroy', 'Admin\App\Http\Controllers\PartController@destroy')->name('parts.destroy');

Route::get('/admin/edit/{id}', 'Admin\PartController@edit')->name('parts.edit');
// ----------------------------------------------------------------------------- User Management
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    // Now we add the routes
    Route::resource('/parts', 'PartController', ['except'=>['show', 'create', 'store']]);
});
