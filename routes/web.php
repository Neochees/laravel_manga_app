<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Models\Manga;

Route::get('/', [MangaController::class, 'index']);

Route::get('/manga/{manga}', [MangaController::class, 'show']);

Route::post('/manga', [MangaController::class, 'store']);

Route::patch('/manga/{manga}', [MangaController::class, 'update']);
