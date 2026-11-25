<?php

use Illuminate\Support\Facades\Route;
use App\Models\Banda;
use App\Models\Artista;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bandas', function () {
    $bandas = Banda::with('artistas')->get();

    return view('bandas', compact('bandas'));
})->name('bandas');

Route::get('/artistas', function () {
    $artistas = Artista::with('banda')->get();

    return view('artistas', compact('artistas'));
})->name('artistas');