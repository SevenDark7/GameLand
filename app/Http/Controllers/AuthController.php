<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'mobile' => ['required', 'min:11', 'max:11', 'regex:/(09)[0-9]{9}/', 'unique:users'],
            'username' => ['required', 'min:5', 'max:30', 'regex:/(^([a-zA-z]+)(\d+)?$)/u', 'unique:users'],
            'password' => ['required', 'min:6', 'max:20'],
        ]);

        User::create([
            'mobile' => $request->mobile,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $request->session()->regenerate();

        $recents = Game::query()->where([
            ['active', 1],
            ['status', 1]
        ])->latest('id')->limit(7)->get();

        $mosts = Game::query()->where([
            ['active', 1],
            ['status', 1]
        ])->latest('visit')->limit(7)->get();

        $blogs = Blog::where('active', 1)
            ->latest('id')->limit(8)->get()->toArray();

        return view('home.home', compact('recents', 'mosts', 'blogs'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1])) {
            $request->session()->regenerate();

            $recents = Game::query()->where([
                ['active', 1],
                ['status', 1]
            ])->latest('id')->limit(7)->get();

            $mosts = Game::query()->where([
                ['active', 1],
                ['status', 1]
            ])->latest('visit')->limit(7)->get();

            $blogs = Blog::where('active', 1)
                ->latest('id')->limit(8)->get()->toArray();

            return view('home.home', compact('recents', 'mosts', 'blogs'));
        }

        throw ValidationException::withMessages([
            'username' => 'نام کاربری یا رمز عبور صحیح نمیباشد.'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        $recents = Game::query()->where([
            ['active', 1],
            ['status', 1]
        ])->latest('id')->limit(7)->get();

        $mosts = Game::query()->where([
            ['active', 1],
            ['status', 1]
        ])->latest('visit')->limit(7)->get();

        $blogs = Blog::where('active', 1)
            ->latest('id')->limit(8)->get()->toArray();

        return view('home.home', compact('recents', 'mosts', 'blogs'));
    }
}
