<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

// Filament Admin Routes are automatically loaded
