<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::resource('pasiens', PasienController::class);


Route::get('/', [PasienController::class, 'index']);