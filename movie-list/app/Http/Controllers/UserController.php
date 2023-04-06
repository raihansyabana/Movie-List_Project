<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('profile', compact('user'));
    }

    public function storeUpdateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($user->name != $request->name)
        {
            $user->name = $request->name;
        }
        if($user->email != $request->email)
        {
            $user->email = $request->email;
        }
        if($user->dob != $request->dob)
        {
            $user->dob = $request->dob;
        }
        if($user->phone != $request->phone)
        {
            $user->phone = $request->phone;
        }
        $user->image = $request->image;
        $user->save();

        return redirect('/profile');
    }

    public function watchList()
    {
        $watchlists = Watchlist::where('user_id', '=', Auth::user()->id)->paginate(5);
        return view('watchList', compact('watchlists'));
    }

    public function addWatchlist($id)
    {
        Watchlist::create([
            'user_id' => Auth::user()->id,
            'movie_id' => $id,
            'status' => 'Planned'
        ]);
        return redirect('/watchlist');
    }

    public function changeWatchlist(Request $request)
    {
        $watchlist = Watchlist::find($request->watchlist_id);
        $watchlist->status = $request->status;
        $watchlist->save();
        return redirect('/watchlist');
    }

    public function searchWatchlist(Request $request)
    {
        $search = $request->search;
        $watchlists = Watchlist::query()
                        ->join('movies', 'watchlists.movie_id', '=', 'movies.id')
                        ->where('movies.title', 'LIKE', "%{$search}%")
                        ->orWhere('status', 'LIKE', "%{$search}%")
                        ->select('watchlists.*')
                        ->paginate(5);
        return view('watchlist', compact('watchlists'));
    }
}