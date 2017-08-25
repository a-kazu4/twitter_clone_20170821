<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class FriendshipController extends Controller
{

    public function following($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();
        $followings = $user->followings;
        $followers = $user->followers;

        return view('friendship.following', [
            'user' => $user,
            'current_user' => $current_user,
            'followings' => $followings,
            'followers' => $followers
        ]);
    }

    public function followers($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();
        $followings = $user->followings;
        $followers = $user->followers;

        return view('friendship.followers', [
            'user' => $user,
            'current_user' => $current_user,
            'followings' => $followings,
            'followers' => $followers
        ]);
    }

    public function create($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();

        $user->followers()->attach($current_user->id);

        return redirect()->route('user_show', ['name' => $name]);

    }

    public function destroy($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();
        $user->followers()->detach($current_user->id);

        return redirect()->route('user_show', ['name' => $name]);
    }
}
