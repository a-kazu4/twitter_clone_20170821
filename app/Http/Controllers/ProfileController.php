<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $current_user = Auth::user();
        $followings = $current_user->followings;
        $followers = $current_user->followers;

        return view('profile.edit', [
            'current_user' => $current_user,
            'followings' => $followings,
            'followers' => $followers,
        ]);
    }

    public function update(Request $request)
    {
        $current_user = Auth::user();

        $current_user->update([
            'display_name' => $request->input('display_name'),
            'description'  => $request->input('description'),
        ]);

        return redirect('home');
    }
}
