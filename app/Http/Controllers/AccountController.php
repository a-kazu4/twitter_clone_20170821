<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function edit()
    {
        $current_user = Auth::user();

        return view('account.edit', ['current_user' => $current_user]);
    }

    public function update(Request $request)
    {
        $current_user = Auth::user();

        $current_user->update([
            'url_name' => $request->input('url_name'),
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect('home');
    }


}
