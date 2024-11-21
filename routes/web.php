<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InvoiceController::class, 'stream']);
Route::get('pdf/stream', [InvoiceController::class, 'stream']);
Route::get('pdf/download', [InvoiceController::class, 'download']);
