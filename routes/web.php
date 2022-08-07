<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogActionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GameActionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
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
    Route::put('/{game}', [GameController::class, 'update']);
    Route::delete('/{game}', [GameController::class, 'destroy']);
    Route::prefix('comment')->group(function () {
        Route::post('/', [GameActionController::class, 'addComment']);
    });
});


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::post('/login', [AdminController::class, 'login']);
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::prefix('/news')->group(function () {
            Route::post('/', [InformationController::class, 'store']);
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
});

