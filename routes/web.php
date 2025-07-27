<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExpenseController;

Route::get('/', [ExpenseController::class, 'index']);
Route::resource('expenses', ExpenseController::class);

