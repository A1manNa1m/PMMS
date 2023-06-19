<?php

use App\Http\Controllers\PaymentController;
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

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index'); //Routes for mainpage

Route::get('/payment/{payment}/view', [PaymentController::class, 'view'])-> name('payment.view'); //Route for view payment details

Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create'); //Route for create payment details

Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store'); //Route for store payment details

Route::get('/payment/{payment}/edit', [PaymentController::class, 'edit'])-> name('payment.edit'); //Routes for edit payment details

Route::put('/payment/{payment}/update',[PaymentController::class, 'update'])->name('payment.update'); //Routes for update payment details

Route::delete('/payment/{payment}/destroy',[PaymentController::class, 'destroy'])->name('payment.destroy'); //Routes for delete payment details



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
