<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/send-bulk-sms', [SmsController::class, 'sendBulkSms']);
Route::get('/send-sms', function () {
    return view('sms');
});