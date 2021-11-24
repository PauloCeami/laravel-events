<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/', [EventoController::class, 'index']);
Route::get('/evento/create', [EventoController::class, 'create']);
Route::get('/evento/{id}', [EventoController::class, 'show']);
Route::post('/evento', [EventoController::class, 'store']);
