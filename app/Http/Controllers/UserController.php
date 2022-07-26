<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $cities = City::all();
        $games = Auth::user()->games()->with('city')->get();
        return view('user.profile', compact('cities', 'games'));
    }
}
