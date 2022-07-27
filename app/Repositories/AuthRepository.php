<?php

namespace App\Repositories;

use App\Models\User;
use App\Notifications\RegistrationSuccessful;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{

    public function login(Request $request): bool
    {
        return Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1]);
    }

    public function register(Request $request)
    {
        User::create([
            'mobile' => $request->mobile,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ])->notify(new RegistrationSuccessful());
    }

    public function logout()
    {
        Auth::logout();
    }
}
