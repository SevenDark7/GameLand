<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Game;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{

    protected $admin = '09335136797';

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'mobile' => $this->admin, 'active' => 1])) {
            $request->session()->regenerate();
            return redirect()->to('/admin/dashboard');
        }

        throw ValidationException::withMessages([
            'username' => 'نام کاربری یا رمز عبور صحیح نمیباشد.'
        ]);
    }

    public function dashboard()
    {
        $cities = City::all();
        $games = Game::query()->where([['active', 1], ['status', 2]])->get();
        return view('admin.dashboard', compact('cities', 'games'));
    }
}
