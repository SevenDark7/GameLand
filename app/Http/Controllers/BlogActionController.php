<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use App\Repositories\AuthRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class BlogActionController extends Controller
{

    public function addComment(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['sometimes'],
            'password' => ['sometimes'],
            'description' => ['required'],
            'game_id' => ['required'],
        ]);

        if (!Auth::check()) {
            if (!resolve(AuthRepository::class)->login($request)) {
                throw ValidationException::withMessages([
                    'message' => 'نام کاربری یا رمز عبور صحیح نیست'
                ]);
            }
        }
        BlogComment::create([
            'blog_id' => $request->game_id,
            'user_id' => Auth::id(),
            'description' => $request->description,
        ]);
        return redirect()->back();
    }
}
