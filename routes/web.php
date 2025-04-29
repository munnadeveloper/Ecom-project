<?php

use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/product/details', [FrontendController::class, 'ProductDetails']);
Route::get('/view-products', [FrontendController::class, 'ViewProduct']);
Route::get('/checkout', [FrontendController::class, 'CheckOut']);
