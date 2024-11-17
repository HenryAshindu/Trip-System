<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tripController;
use App\Http\Controllers\searchController;

Route::resource('trips', tripController::class);

Route::get('/search', searchController::class)->name('trips.search');


