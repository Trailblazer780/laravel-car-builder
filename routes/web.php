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

// --------------------------------------------------------------------------- Routes for Car Builder
Route::get('/builder', 'App\Http\Controllers\Builder\BuilderController@index')->name('builder');




// --------------------------------------------------------------------------- Routes for part CRUD
Route::get('/admin/add', 'Admin\PartController@create')->name('parts.add');
Route::put('/admin/update/{part}', 'Admin\PartController@update')->name('parts.update');
Route::post('/admin/add', 'Admin\PartController@store')->name('parts.store');
Route::get('/admin/edit/{part}', 'Admin\PartController@edit')->name('parts.edit');
Route::delete('/admin/destroy/{part}', 'Admin\PartController@destroy')->name('parts.destroy');

// ----------------------------------------------------------------------------- User Management
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    // Now we add the routes
    Route::resource('/parts', 'PartController', ['except'=>['show', 'create', 'store']]);
});
