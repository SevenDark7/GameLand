<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        $games = Game::query()->where([
            ['active', 1],
            ['status', 1]
        ])->latest('id')->get();

        return view('games.list', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required','image','mimes:jpeg,png,jpg']
        ]);

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $request->image = $uploadedFile->storePubliclyAs('/images', $fileName);
        }

        return view('games.list');
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show(Game $game)
    {
        $gameInfo = Game::query()->with(['comments', 'likes'])->find($game->id);
        return view('games.single', compact('gameInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Game $game
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game $game
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     * @return RedirectResponse
     */
    public function destroy(Game $game): RedirectResponse
    {
        $game->delete();
        return redirect()->back();
    }
}
