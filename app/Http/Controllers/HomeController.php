<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $current_user = Auth::user();
        $followings = $current_user->followings;
        $followers = $current_user->followers;
        $current_user_and_followings = $followings->push($current_user);
        $user_ids = array();
        foreach ($current_user_and_followings as $user)
            array_push($user_ids, $user->id);
        $ordered_tweets = Tweet::whereIn('user_id', $user_ids)->orderByDesc('created_at')->get();

        return view('home', [
            'current_user' => $current_user,
            'tweets' => $ordered_tweets,
            'followings' => $followings,
            'followers' => $followers,
        ]);
    }
}
