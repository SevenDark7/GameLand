<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $blogs = Blog::query()->where([
            ['active', 1],
            ['status', 1]
        ])->with(['user', 'likes', 'comments'])->paginate(10);

        return view('blogs.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'platform' => ['required'],
            'release' => ['required', 'date'],
            'publisher' => ['required'],
            'genre' => ['required'],
            'description' => ['nullable'],
            'meta' => ['nullable'],
        ]);

        Blog::create([
            'title' => $request->title,
            'platform' => $request->platform,
            'release' => $request->release,
            'publisher' => $request->publisher,
            'genre' => $request->genre,
            'user_id' => Auth::id(),
            'description' => $request->description,
            'meta' => $request->meta,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     * @return Application|Factory|View
     */
    public function show()
    {
//        $blogInfo = Blog::query()->with(['user', 'likes', 'comments'])->find($blog->id);

        return view('blogs.single');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function edit(Blog $blog): Response
    {
        $blogInfo = Blog::query()->with(['user', 'likes', 'comments'])->find($blog->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'platform' => ['required'],
            'release' => ['required', 'date'],
            'publisher' => ['required'],
            'genre' => ['required'],
            'description' => ['nullable'],
            'meta' => ['nullable'],
        ]);

        $blog->update([
            'title' => $request->title,
            'platform' => $request->platform,
            'release' => $request->release,
            'publisher' => $request->publisher,
            'genre' => $request->genre,
            'description' => $request->description,
            'meta' => $request->meta,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();
        return back();
    }
}
