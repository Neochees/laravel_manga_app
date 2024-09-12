<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Models\Manga;

Route::get('/', [MangaController::class, 'index']);

Route::get('/manga/{manga}', [MangaController::class, 'show']);

Route::get('/manga/{manga}/edit', [MangaController::class, 'edit']);

Route::patch('/manga/{manga}', [MangaController::class, 'update']);

Route::post('/create', [MangaController::class, 'store']);

Route::get('/create', [MangaController::class, 'create']);

Route::delete('/manga/{manga}', [MangaController::class, 'destroy']);
