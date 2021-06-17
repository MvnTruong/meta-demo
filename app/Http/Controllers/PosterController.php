<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index()
    {
        $posters = Poster::all();
        return view('posters.index', ['posters' => $posters]);
    }
}
