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
        $blogs = Blog::query()->where('active', 1)
            ->with(['user', 'likes', 'comments'])->latest('id')->paginate(10);

        return view('blogs.blog', compact('blogs'));
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
            'description' => ['required', 'min:10'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif'],
            'meta' => ['nullable'],
        ]);

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('/blogImages'), $fileName);
            $request->image = 'blogImages/' . $fileName;
        }

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'user_id' => Auth::id(),
            'meta' => $request->meta,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     * @return Application|Factory|View
     */
    public function show(Blog $blog)
    {
        $blog->increment('visit');

        $blogInfo = Blog::query()->with(['user', 'likes', 'comments' => function($query) {
            $query->where([['status', 1], ['active', 1]]);
        }])->find($blog->id);

        $blogs = Blog::query()->where([['active', 1], ['id', '!=', $blog->id]])->where(function ($query) use ($blog) {
            $query->where('title', 'LIKE', '%' . $blog->title . '%')->orWhere('description', 'LIKE', '%' . $blog->title . '%');
        })->latest('id')->limit(8)->get()->toArray();

        return view('blogs.single', compact('blogInfo', 'blogs'));
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
