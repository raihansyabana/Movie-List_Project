<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieCharacter;
use App\Models\MovieGenre;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createActor()
    {
        return view('admin.add-actor');
    }

    public function storeActor(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'gender' => ['required'],
            'biography' => ['required', 'min:10'],
            'dob' => ['required', 'date'],
            'pob' => ['required'],
            'image' => ['required', 'mimes:jpeg, jpg, png, gif'],
            'popularity' => ['required', 'numeric']
        ]);

        $image = $request->file('image')->store('/public/images/actor/');
        $image = str_replace('public/', '', $image);

        Actor::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'biography' => $request->biography,
            'dob' => $request->dob,
            'pob' => $request->pob,
            'image' => $image,
            'popularity' => $request->popularity
        ]);

        return redirect('/actors');
    }

    public function updateActor($id)
    {
        $actor = Actor::find($id);
        return view('admin.edit-actor', compact('actor'));
    }

    public function storeUpdateActor(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'gender' => ['required'],
            'biography' => ['required', 'min:10'],
            'dob' => ['required', 'date'],
            'pob' => ['required'],
            'image' => ['required'],
            'popularity' => ['required', 'numeric']
        ]);

        $actor = Actor::find($request->actor_id);
        if ($actor->name != $request->name) {
            $actor->name = $request->name;
        }
        if ($actor->gender != $request->gender) {
            $actor->gender = $request->gender;
        }
        if ($actor->biography != $request->biography) {
            $actor->biography = $request->biography;
        }
        if ($actor->dob != $request->dob) {
            $actor->dob = $request->dob;
        }
        if ($actor->pob != $request->pob) {
            $actor->pob = $request->pob;
        }
        if ($actor->image != $request->image) {
            $image = $request->file('image')->store('/public/images/actor/');
            $image = str_replace('public/', '', $image);
            $actor->image = $request->image;
        }
        if ($actor->popularity != $request->popularity) {
            $actor->popularity = $request->popularity;
        }
        $actor->save();

        return redirect('/actors');
    }

    public function deleteActor($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/actors');
    }

    public function createMovie()
    {
        $genres = Genre::get();
        $actors = Actor::get();
        return view('admin.add-movie', compact('genres', 'actors'));
    }

    public function storeMovie(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:2', 'max:50'],
            'description' => ['required', 'min:8'],
            'genre' => ['required'],
            'director' => ['required', 'min:3'],
            'actor' => ['required'],
            'character' => ['required'],
            'release_date' => ['required'],
            'thumbnail' => ['required'],
            'background' => ['required'],
        ]);

        $thumbnail = $request->file('thumbnail')->store('/public/images/thumbnail/');
        $thumbnail = str_replace('public/', '', $thumbnail);
        $background = $request->file('background')->store('/public/images/background/');
        $background = str_replace('public/', '', $background);

        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'director' => $request->director,
            'release_date' => $request->release_date,
            'thumbnail' => $thumbnail,
            'background' => $background
        ]);

        MovieGenre::create([
            'genre_id' => $request->genre,
            'movie_id' => $movie->id,
        ]);

        $actors = $request->actor;
        $movie_characters = $request->character;
        $i = 0;
        foreach ($actors as $actor) {
            MovieCharacter::create([
                'movie_id' => $movie->id,
                'actor_id' => $actor,
                'character_name' => $movie_characters[$i]
            ]);
            $i++;
        }

        return redirect('/');
    }

    public function updateMovie($id)
    {
        $movie = Movie::query()
            ->join('movie_genres', 'movies.id', '=', 'movie_genres.movie_id')
            ->join('genres', 'movie_genres.genre_id', '=', 'genres.id')
            ->where('movies.id', '=', $id)
            ->select('movies.*', 'genres.id as genreID', 'genres.name as genreName')
            ->first();
        $selectedActors = MovieCharacter::where('movie_id', '=', $id)->get();
        $genres = Genre::all();
        $actors = Actor::all();
        return view('admin.edit-movie', compact('movie', 'genres', 'selectedActors', 'actors'));
    }

    public function storeUpdateMovie(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:2', 'max:50'],
            'description' => ['required', 'min:8'],
            'genre' => ['required'],
            'director' => ['required', 'min:3'],
            'actor' => ['required'],
            'character' => ['required'],
            'release_date' => ['required'],
            'thumbnail' => ['required'],
            'background' => ['required'],
        ]);

        $movie = Movie::find($request->movie_id);
        if ($movie->title != $request->title) {
            $movie->title = $request->title;
        }
        if ($movie->description != $request->description) {
            $movie->description = $request->description;
        }
        if ($movie->director != $request->director) {
            $movie->director = $request->director;
        }
        if ($movie->release_date != $request->release_date) {
            $movie->release_date = $request->release_date;
        }
        if ($movie->thumbnail != $request->thumbnail) {
            $thumbnail = $request->file('thumbnail')->store('/public/images/thumbnail/');
            $thumbnail = str_replace('public/', '', $thumbnail);
            $movie->thumbnail = $request->thumbnail;
        }
        if ($movie->background != $request->background) {
            $background = $request->file('background')->store('/public/images/background/');
            $background = str_replace('public/', '', $background);
            $movie->background = $request->background;
        }
        $movie->save();

        $genre = MovieGenre::where('movie_id', '=', $request->movie_id)->first();
        if ($genre->genre_id != $request->genre) {
            $genre = $request->genre;
        }
        $genre->save();

        $actors = $request->actor;
        $characters = $request->character;
        $movie_characters = MovieCharacter::where('movie_id', '=', $request->movie_id)->get();
        $i = 0;
        foreach ($actors as $actor) {
            if ($movie_characters->count() > $i) {
                if ($movie_characters[$i]->actor_id != $actor) {
                    $movie_characters[$i]->actor_id = $actor;
                    $movie_characters[$i]->save();
                }
                if ($movie_characters[$i]->character_name != $characters[$i]) {
                    $movie_characters[$i]->character_name = $characters[$i];
                    $movie_characters[$i]->save();
                }
            } else {
                MovieCharacter::create([
                    'movie_id' => $movie->id,
                    'actor_id' => $actor,
                    'character_name' => $characters[$i]
                ]);
            }
            $i++;
        }

        return redirect('/');
    }

    public function deleteMovie($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/');
    }
}