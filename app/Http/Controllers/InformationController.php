<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
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
            'name' => ['required'],
            'release' => ['required'],
            'platform' => ['required'],
            'publisher' => ['required'],
            'genre' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif'],
            'description' => ['nullable', 'min:10'],
            'meta' => ['nullable']
        ]);

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('/informationImages'), $fileName);
            $request->image = 'informationImages/' . $fileName;
        }

        Information::create([
            'name' => ucwords($request->name),
            'platform' => $request->platform,
            'release' => $request->release,
            'publisher' => ucwords($request->publisher),
            'genre' => ucwords($request->genre),
            'image' => $request->image,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'meta' => $request->meta
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Information $information
     * @return Application|Factory|View
     */
    public function show(Information $information)
    {
        $informationInfo = Information::query()->find($information->id);
        return view('', compact('informationInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Information $information
     * @return RedirectResponse
     */
    public function update(Request $request, Information $information): RedirectResponse
    {
        $request->validate([
            'name' => ['required'],
            'release' => ['required'],
            'platform' => ['required'],
            'publisher' => ['required'],
            'genre' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif'],
            'description' => ['nullable', 'min:10'],
        ]);

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('/informationImages'), $fileName);
            $request->image = 'informationImages/' . $fileName;
        }

        $information->update([
            'name' => ucwords($request->name),
            'platform' => $request->platform,
            'release' => $request->release,
            'publisher' => ucwords($request->publisher),
            'genre' => ucwords($request->genre),
            'image' => $request->image,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Information $information
     * @return RedirectResponse
     */
    public function destroy(Information $information): RedirectResponse
    {
        $information->delete();
        return redirect()->back();
    }
}
