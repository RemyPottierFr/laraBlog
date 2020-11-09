<?php

namespace App\Http\Controllers;

use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('pages.auth.register');
    }

    public function register_process()
    {
        request()->validate([
            "name" => ["required"],
            "job" => ["required"],
            "email" => ["required", "email"],
            "password" => ["required", "confirmed", "min:8"],
            "password_confirmation" => ['required']
        ]);

        $user = new User([
            "name" => request("name"),
            "job" => request("job"),
            "email" => request('email'),
            "password" => bcrypt(request('password')),
            "picture" => "https://via.placeholder.com/640x480.png/005533?text=fugit"
        ]);

        $user->save();

        $auth = auth()->attempt([
            'email' => request('email'),
            "password" => request('password')
        ]);

        if ($auth) {
            return redirect('/dashboard');
        }

        return back()->withInput()->withErrors([
            'auth' => "Check your register informations.",
        ]);
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function login_process()
    {
        request()->validate([
            "email" => ["required", "email"],
            "password" => ["required", "min:8"],
        ]);

        $auth = auth()->attempt([
            'email' => request('email'),
            "password" => request('password')
        ]);

        if ($auth) {
            return redirect('/dashboard');
        }

        return back()->withInput()->withErrors([
            'auth' => "Check your login informations.",
        ]);
    }

    public function logout (){
        auth()->logout();

        return redirect('/');
    }
}
