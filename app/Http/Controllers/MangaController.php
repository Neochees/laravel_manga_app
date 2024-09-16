<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Genre;
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
        $genres = Genre::all();
        return view('mangas.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|max:225|unique:mangas,title',
            'author' => 'required|max:225',
            'rating' => 'required|max:10',
            'description' => 'required',
            'genre_id' => 'required|exists:genres,id'
        ]);

        Manga::create($attributes);

        return redirect('/');
    }



    public function edit(Manga $manga)
    {
        $genres = Genre::all();
        return view('mangas.edit', compact('manga', 'genres'));
    }

    public function update(Request $request, Manga $manga)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:225|unique:mangas,title,' . $manga->id,
            'author' => 'required|max:225|unique:mangas,author,' . $manga->id,
            'rating' => 'required|max:225',
            'description' => 'required',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $manga->update($validatedData);

        return redirect('/')->with('success', 'Manga updated successfully!');
    }



    public function destroy(Manga $manga)
    {
        $manga->delete();

        return redirect()->route('manga.index')
                         ->with('success', 'Manga deleted!.');
    }
}
