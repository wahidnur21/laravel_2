<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\DetailTransactionsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('transaction', [TransactionsController::class, 'index']);
Route::get('transaction/add', [TransactionsController::class, 'create']);

Route::get('categori', [CategoriesController::class, 'index']);
Route::get('categori/add', [CategoriesController::class, 'create']);

Route::get('customer', [CustomersController::class, 'index']);
Route::get('customer/add', [CustomersController::class, 'create']);
Route::post('customer', [CustomersController::class, 'store']);
Route::get('customer/{customer}', [CustomersController::class, 'destroy']);

Route::get('stuff', [StuffController::class, 'index']);
Route::get('stuff/add', [StuffController::class, 'create']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/add', [UserController::class, 'create']);