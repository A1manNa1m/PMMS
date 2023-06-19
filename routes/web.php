<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\VendorController;
// use App\Http\Controllers\ReportController;


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

//route for view welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/vendordata','App\Http\Controllers\VendorController@mainpage');//route for view vendor page
Route::post('/vendordata/create','App\Http\Controllers\VendorController@create');//route for create vendor
Route::get('/vendordata/{id}/view','App\Http\Controllers\VendorController@view');//route for view selected vendor
Route::get('/vendordata/{id}/edit','App\Http\Controllers\VendorController@edit');//route for go to edit page with selected vendor
Route::post('/vendordata/{id}/update','App\Http\Controllers\VendorController@update');//route for update selected vendor
Route::get('/vendordata/{id}/delete','App\Http\Controllers\VendorController@delete');//route for delete selected vendor

Route::get('/reportdata','App\Http\Controllers\ReportController@mainpage');//route for view report page
Route::post('/reportdata/create','App\Http\Controllers\ReportController@create');//route for create report
Route::get('/reportdata/{id}/view','App\Http\Controllers\ReportController@view');//route for view selected report
Route::get('/reportdata/{id}/edit','App\Http\Controllers\ReportController@edit');//route for go to edit page with selected report
Route::post('/reportdata/{id}/update','App\Http\Controllers\ReportController@update');//route for update selected report
Route::get('/reportdata/{id}/delete','App\Http\Controllers\ReportController@delete');//route for delete selected report


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('vendordata', [VendorController::class, 'mainpage'])->name('vendordata');
// Route::get('reportdata', [ReportController::class, 'mainpage'])->name('reportdata');
