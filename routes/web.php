<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Game;
use \App\Models\Profile;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
});


Route::get('/favorites', function () {
    return view('favoGames');
});

Route::get('/games', function () {
    $games = Game::orderBy('ID')->get();
    return view('gamesList', [
        'games' => $games
    ]);
});

Route::post('/login', function () {
    $validator = Validator::make(request()->all(), [
        'name' => 'required',
        'password' => 'required|min:8'
    ])->validated();
    $user = Profile::findOrFail($validator['name']);
});

Route::post('/signup', function () {
    $validator = Validator::make(request()->all(), [
        'name' => 'required|min:5',
        'password' => 'required|min:8',
        'phone' => 'required|min:11|max:11'
    ])->validated();
    $user = Profile::find($validator['name']);
    if (is_null($user)) {
        Profile::create([
            'name' => $validator['name'],
            'password' => $validator['password'],
            'phone' => $validator['phone']
        ]);
        return view('home');
    }
    else {
        return redirect()->back()->withErrors($user);
    }
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.login');
    });

    Route::get('/articles/comments', function () {
        return view('articles.comments');
    });

    Route::get('/articles/panel', function () {
//        $games = Game::all();
        return view('admin.articles.panel');
    });

    Route::post('/articles/register', function () {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'release' => 'required',
            'publish' => 'required',
            'genre' => 'required'
        ])->validated();
        Game::create([
            'name' => ucwords($validator['name']),
            'platform' => strtoupper(request('platform')),
            'release' => $validator['release'],
            'publisher' => ucwords($validator['publish']),
            'genre' => ucwords($validator['genre'])
        ]);
        return back();
    });

    Route::post('/articles/update', function () {
        $validator = Validator::make(request()->all(), [
            'id' => 'required'
        ])->validated();
        $article = Game::findOrFail($validator['id']);
        return view('admin.articles.panel', [
            'article' => $article
        ]);
    });
});
