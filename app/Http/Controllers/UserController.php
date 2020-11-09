<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function details()
    {
        $author = User::find(request('id'))->load('articles');

        return view('pages.author.index', ["author" => $author]);
    }

    public function dashboard()
    {
        if (auth()->guest()) {
            redirect('/login')->withErrors([
                "auth" => "You need to be connected to access this page.",
            ]);
        };

        return view('pages.dashboard.index');
    }
}
