<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function post(Request $request)
    {
        $current_user = Auth::user();

        Tweet::create([
            'user_id' => $current_user->id,
            'body' => $request->input('body'),
        ]);

        return redirect('home');
    }

    public function search(Request $request)
    {
        $current_user = Auth::user();
        $query = Tweet::query();
        if(!empty($request)) {
            $keyword = $request->input('search');
            $tweets = $query->where('body', 'like', '%'.$keyword.'%')->orderByDesc('created_at')->get();
        }
        $data = $query->get();
        return view('tweet.search', [
            'current_user' => $current_user,
            'tweets' => $tweets,
            'keyword' => $keyword
        ], compact('data', 'search'));
    }
}
