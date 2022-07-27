<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\RegistrationSuccessful;
use Illuminate\Http\RedirectResponse;
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

    public function register(Request $request): RedirectResponse
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
        ])->notify(new RegistrationSuccessful());

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1])) {
            $request->session()->regenerate();
        }

        return redirect()->to('/');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1])) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }

        throw ValidationException::withMessages([
            'username' => 'نام کاربری یا رمز عبور صحیح نمیباشد.'
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
