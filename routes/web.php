<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\GenreController;
use App\Models\Manga;

Route::get('/', function (){
    return redirect()->route('manga.index');
});

Route::get('/manga', [MangaController::class, 'index'])->name('manga.index');
Route::get('/manga/create', [MangaController::class, 'create']);
Route::post('/manga/create', [MangaController::class, 'store']);
Route::get('/manga/{manga}', [MangaController::class, 'show']);
Route::get('/manga/{manga}/edit', [MangaController::class, 'edit']);
Route::patch('/manga/{manga}', [MangaController::class, 'update']);
Route::delete('/manga/{manga}', [MangaController::class, 'destroy']);

Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre/create', [GenreController::class, 'store']);
Route::get('/genre/{genre}', [GenreController::class, 'show']);
Route::get('/genre/{genre}/edit', [GenreController::class, 'edit']);
Route::patch('/genre/{genre}', [GenreController::class, 'update']);
Route::delete('/genre/{genre}', [GenreController::class, 'destroy']);
