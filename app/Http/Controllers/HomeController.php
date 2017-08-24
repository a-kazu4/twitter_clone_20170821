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

        $ordered_tweets = Tweet::orderByDesc('created_at')->get();

        return view('home', ['tweets' => $ordered_tweets, 'current_user' => $current_user]);
    }
}
