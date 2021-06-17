<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Poster;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }

    public function store(Request $request)
    {
        $poster = Poster::firstOrNew(['src' => $request['poster']]);
        $poster->save();

        $movie = Movie::firstOrNew(['title' => $request['title']]);
        $movie->year = $request['year'];
        $movie->imdb = $request['imdb'];
        $movie->type = $request['type'];
        $movie->poster()->associate($poster);
        $movie->save();
    }
}
