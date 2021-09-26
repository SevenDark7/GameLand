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
        return view('admin.admin');
    });

    Route::get('/comments', function () {
        return view('articles.comments');
    });

    Route::get('/register', function () {
        $games = Game::all();
        return view('admin.articles.create', [
            'games' => $games
        ]);
    });

    Route::post('/articles/create', function () {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'release' => 'required',
            'publish' => 'required',
            'genre' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $release = array();
        $release = explode('/', request('release'));
        strlen($release[0]) < 2 ? $release[0] = "0" . $release[0] : $release[0];
        strlen($release[1]) < 2 ? $release[1] = "0" . $release[1] : $release[1];
        $finalRelease = implode('/', $release);
        Game::create([
            'Name' => ucwords(request('name')),
            'Slug' => implode('+', explode(' ', request('name'))),
            'Platform' => strtoupper(request('platform')),
            'Release' => $finalRelease,
            'Publisher' => ucwords(request('publish')),
            'Genre' => ucwords(request('genre'))
        ]);
        return redirect('admin/register');
    });
});
