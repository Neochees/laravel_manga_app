<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\GenreController;
use App\Models\Manga;

Route::get('/', [MangaController::class, 'index']);
Route::get('/manga/{manga}', [MangaController::class, 'show']);
Route::get('/manga/{manga}/edit', [MangaController::class, 'edit']);
Route::patch('/manga/{manga}', [MangaController::class, 'update']);
Route::post('/create', [MangaController::class, 'store']);
Route::get('/create', [MangaController::class, 'create']);
Route::delete('/manga/{manga}', [MangaController::class, 'destroy']);

Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{genre}', [GenreController::class, 'show']);
Route::get('/genre/{genre}/edit', [GenreController::class, 'edit']);
Route::patch('/genre/{genre}', [GenreController::class, 'update']);
Route::post('/genre', [GenreController::class, 'store']);
Route::delete('/genre/{genre}', [GenreController::class, 'destroy']);
