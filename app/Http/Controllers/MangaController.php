<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $mangas = Manga::get()->all();
        return view('mangas.index', compact('mangas'));
    }

    public function show(Manga $manga)
    {
        return view('mangas.show', [
            'manga' => $manga,
        ]);
    }

    public function create()
    {
        return view('mangas.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|max:225|unique:mangas,title',
            'author' => 'required|max:225|unique:mangas,author',
            'rating' => 'required|max:225',
            'description' => 'required|max:225'
        ]);
    }

    public function edit(Manga $manga)
    {
        return view('mangas.edit', compact('manga'));
    }

    public function update(Manga $manga)
    {

    }

    public function destroy(Manga $manga)
    {

    }
}
