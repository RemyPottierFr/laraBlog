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
        $user = User::find(auth()->id())->load('articles');
        return view('pages.dashboard.index', ["user" => $user]);
    }
    public function settings()
    {
        $user = User::find(auth()->id())->load('articles');
        return view('pages.dashboard.settings', ["user" => $user]);
    }
}
