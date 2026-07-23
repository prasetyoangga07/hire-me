<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'index'])->name('portofolio');
