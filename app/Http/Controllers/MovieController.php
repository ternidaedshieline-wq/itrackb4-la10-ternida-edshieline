<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $genre = $request->query('genre', '');
        $search = $request->query('search', '');

        $movies = Movie::query()
            ->when($genre !== '', function ($query) use ($genre) {
                $query->where('genre', $genre);
            })
            ->when($search !== '', function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->get()
            ->toArray();

        return view('movies.index', [
            'movies' => $movies,
            'genre' => $genre,
            'search' => $search
        ]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'director' => 'required|max:100',
            'genre' => 'required|max:100',
            'year' => 'required|integer|min:1900|max:2026',
        ]);

        Movie::create($validated);

        return redirect()
            ->route('movies.index')
            ->with('success', 'Movie added successfully!');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id)->toArray();

        return view('movies.show', compact('movie'));
    }

    public function featured()
    {
        $movies = Movie::where('featured', true)
            ->get()
            ->toArray();

        return view('movies.index', [
            'movies' => $movies,
            'genre' => '',
            'search' => ''
        ]);
    }
}
