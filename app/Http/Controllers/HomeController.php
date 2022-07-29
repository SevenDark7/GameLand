<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Game;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
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

    /**
     * @return Application|Factory|View
     */
    public function about()
    {
        return view('home.about');
    }

    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        return view('home.contact');
    }



}
