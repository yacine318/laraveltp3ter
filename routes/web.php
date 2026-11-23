<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientC;

Route::get('/', [clientC::class, 'index'])->name('accueil');
