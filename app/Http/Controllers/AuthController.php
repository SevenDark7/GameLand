<?php

namespace App\Http\Controllers;

use App\Repositories\AuthRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    protected $authRipo;

    public function __construct()
    {
        $this->authRipo = resolve(AuthRepository::class);
    }

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

        $this->authRipo->register($request);

        if ($this->authRipo->login($request)) {
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

        if ($this->authRipo->login($request)) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }

        throw ValidationException::withMessages([
            'username' => 'نام کاربری یا رمز عبور صحیح نمیباشد.'
        ]);
    }

    public function logout(): RedirectResponse
    {
        $this->authRipo->logout();
        return redirect()->to('/');
    }
}
