<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpayPlusController;

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
Route::get('/webpayplus/create', function () {
    return view('webpayplus/create');
});
Route::post('/webpayplus/create/', [WebpayPlusController::class,'createdTransaction']);

Route::any('/webpayplus/returnUrl', [WebpayPlusController::class,'commitTransaction']);

Route::get('/webpayplus/refund', [WebpayPlusController::class,'showRefund']);
Route::post('/webpayplus/refund',  [WebpayPlusController::class,'refundTransaction']);

Route::get('/webpayplus/transactionStatus', [WebpayPlusController::class,'showGetStatus']);
Route::post('/webpayplus/transactionStatus', [WebpayPlusController::class,'getTransactionStatus']);

