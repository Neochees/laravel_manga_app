<?php

namespace App\Http\Controllers;

use App\Http\Requests\createOrUpdateMangaRequest;
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

    public function create(Manga $manga)
    {
        $genres = Genre::all();
        return view('mangas.create', compact('manga', 'genres'));
    }

    public function store(createOrUpdateMangaRequest $request)
    {
        Manga::create($request->validated());

        return redirect('/');
    }



    public function edit(Manga $manga)
    {
        $genres = Genre::all();
        return view('mangas.edit', compact('manga', 'genres'));
    }

    public function update(createOrUpdateMangaRequest $request, Manga $manga)
    {

        $manga->update($request->validated());

        return redirect('/')->with('success', 'Manga updated successfully!');
    }



    public function destroy(Manga $manga)
    {
        $manga->delete();

        return redirect()->route('manga.index')
                         ->with('success', 'Manga deleted!.');
    }
}
