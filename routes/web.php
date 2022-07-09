<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/single', [BlogController::class, 'show']);
});

Route::prefix('/games')->group(function () {
    Route::get('/', [GameController::class, 'index']);
    Route::get('/single', [BlogController::class, 'show']);
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
