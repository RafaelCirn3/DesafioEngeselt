<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfeitariaController;
use App\Http\Controllers\ProdutoController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
Route::resource('produtos', ProdutoController::class);
Route::resource('confeitarias', ConfeitariaController::class);
