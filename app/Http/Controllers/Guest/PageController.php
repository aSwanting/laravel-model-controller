<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        foreach ($movies as $movie) {
            $movie->date = date_format(date_create($movie->date), 'M d Y');
        }
        return view('guest.home', compact('movies'));
    }
}
