<?php

namespace App\Http\Controllers;

use App\Http\Requests\createOrUpdateGenreRequest;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;

class GenreController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::get()->all();
        return view('genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Genre $genre)
    {
        $mangas = Manga::all();
        return view('genres.create', compact('genre', 'mangas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createOrUpdateGenreRequest $request)
    {
        Genre::create($request->validated());

        return redirect('/genre')->with('success', 'Genre added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        $mangas = $genre->manga()->get();

        return view('genres.show', [
            'genre' => $genre,
            'mangas' => $mangas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->validated());


        return redirect('/genre')->with('success', 'Genre updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('genre.index');
    }
}
