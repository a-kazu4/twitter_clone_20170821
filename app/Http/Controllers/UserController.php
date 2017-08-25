<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();
        $user_posted_tweets = $user->tweets()->orderByDesc('created_at')->get();
        $followings = $user->followings;
        $followers = $user->followers;

        return view('user.index', [
            'user' => $user,
            'current_user' => $current_user,
            'tweets' => $user_posted_tweets,
            'followings' => $followings,
            'followers' => $followers
        ]);
    }
}
