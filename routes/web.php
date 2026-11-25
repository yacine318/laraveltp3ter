<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientC;

Route::get('/', [clientC::class, 'index'])->name('accueil');
Route::get('/ajoutmat', [clientC::class, 'newM']);
Route::post('/ajoutmat', [clientC::class, 'newsave']);
Route::post('/ajoutmat2', [clientC::class, 'newsave2']);
Route::get('/materiauxsupprimer/{idMateriaux}', [clientC::class, 'supprmat']);

