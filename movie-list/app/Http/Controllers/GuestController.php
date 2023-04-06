<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index()
    {
        $carousel = Movie::orderBy('id', 'DESC')->take(3)->get();
        $movies = Movie::orderBy('id', 'DESC')->take(10)->get();
        $genres = Genre::take(6)->get();
        $show = Movie::orderBy('release_date', 'DESC')->take(5)->get();
        return view('welcome', compact('carousel', 'movies', 'genres', 'show'));
    }

    public function movieDetail($id)
    {
        $movie = Movie::find($id);
        $more = Movie::orderBy('id', 'DESC')->take(5)->get();
        if (Auth::user()) {
            $watchlist = Watchlist::where('user_id', '=', Auth::user()->id)->where('movie_id', '=', $id)->first();
        } else {
            $watchlist = null;
        }
        return view('movie-detail', compact('movie', 'more', 'watchlist'));
    }

    public function movieGenre($id)
    {
        $genre = Genre::find($id);
        $movies = Movie::query()
            ->join('movie_genres', 'movies.id', '=', 'movie_genres.movie_id')
            ->where('movie_genres.genre_id', '=', $id)
            ->select('movies.*')
            ->get();
        return view('movie-genre', compact('genre', 'movies'));
    }

    public function movieSearch(Request $request)
    {
        $search = $request->search;
        $movies = Movie::where('title', 'LIKE', "%{$search}%")->get();
        return view('search', compact('movies'));
    }

    public function actors()
    {
        $actors = Actor::get();
        return view('actors', compact('actors'));
    }

    public function actor($id)
    {
        $actor = Actor::find($id);
        return view('actor-detail', compact('actor'));
    }

    public function searchActor(Request $request)
    {
        $search = $request->search;
        $actors = Actor::where('name', 'LIKE', "%{$search}%")->get();
        return view('actors', compact('actors'));
    }
}