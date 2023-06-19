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

Route::get('/inventorydata','App\Http\Controllers\InventoryController@mainpage');
Route::post('/inventorydata/create','App\Http\Controllers\InventoryController@create');
Route::get('/inventorydata/{id}/view','App\Http\Controllers\InventoryController@view');
Route::get('/inventorydata/{id}/edit','App\Http\Controllers\InventoryController@edit');
Route::post('/inventorydata/{id}/update','App\Http\Controllers\InventoryController@update');
Route::get('/inventorydata/{id}/delete','App\Http\Controllers\InventoryController@delete');
