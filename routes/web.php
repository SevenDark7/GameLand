<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogActionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GameActionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/contact-us', [HomeController::class, 'contact']);
    Route::get('/login', [AuthController::class, 'loginPage']);
    Route::get('/register', [AuthController::class, 'registerPage']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::prefix('/blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{blog}', [BlogController::class, 'show']);
    Route::post('/', [BlogController::class, 'store']);
    Route::prefix('comment')->group(function () {
        Route::post('/', [BlogActionController::class, 'addComment']);
    });
});

Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'profile']);
});

Route::prefix('/games')->group(function () {
    Route::get('/', [GameController::class, 'index']);
    Route::get('/{game}', [GameController::class, 'show']);
    Route::post('/', [GameController::class, 'store']);
    Route::prefix('comment')->group(function () {
        Route::post('/', [GameActionController::class, 'addComment']);
    });
});


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.articles.panel');
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
