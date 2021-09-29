<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
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
            'id' => ucwords($validator['name']),
            'slug' => implode('+', explode(' ', $validator['name'])),
            'platform' => strtoupper(request('platform')),
            'release' => $validator['release'],
            'publisher' => ucwords($validator['publish']),
            'genre' => ucwords($validator['genre'])
        ]);
        return back();
    });
    Route::post('/articles/update', function () {
        $validator = Validator::make(request()->all(), [
            'name' => 'required'
        ])->validated();
        $article = Game::findOrFail($validator['name']);
        if (isset($article)) {
            return view('admin.articles.panel', [
                'finded' => $article
            ]);
        }else {
            return view('admin.articles.panel', [
                'notFind' => 'true'
            ]);
        }
    });
});
