<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function following($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();
        return view('follow.following',['user' => $user, 'current_user' => $current_user]);
    }

    public function followers($name)
    {
        $user = User::where('url_name', $name)->firstOrFail();
        $current_user = Auth::user();
        return view('follow.followers',['user' => $user, 'current_user' => $current_user]);
    }
}
