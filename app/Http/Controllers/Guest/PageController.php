<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);

        return view('guest.index', compact('movies'));
    }

    public function about()
    {
        return view('guest.about');
    }
}
