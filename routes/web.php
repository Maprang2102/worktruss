<?php

use Illuminate\Support\Facades\Route;
use App\Features\HomeController;

Route::get('/', [HomeController::class,'index'])->name('home');
