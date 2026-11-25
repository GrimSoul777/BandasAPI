<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\BandaController;

//Rutas de bandas
Route::get('/bandas', [BandaController::class, 'readAll']);
Route::get('/bandas/{id}', [BandaController::class, 'readOne']);
Route::post('/bandas', [BandaController::class, 'create']);
Route::put('/bandas/{id}', [BandaController::class, 'update']);
Route::delete('/bandas/{id}', [BandaController::class, 'delete']);

//Rutas de artistas
Route::get('/artistas', [ArtistaController::class, 'readAll']);
Route::get('/artistas/{id}', [ArtistaController::class, 'readOne']);
Route::post('/artistas', [ArtistaController::class, 'create']);
Route::put('/artistas/{id}', [ArtistaController::class, 'update']);
Route::delete('/artistas/{id}', [ArtistaController::class, 'delete']);