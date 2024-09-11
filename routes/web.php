<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Models\Manga;

Route::get('/', function () {
    return view('index');
});
