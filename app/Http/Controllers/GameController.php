<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $request->validate([
            'search' => ['sometimes'],
            'order' => ['sometimes'],
        ]);

        $games = Game::query()->where([['active', 1], ['status', 1]])
            ->when(isset($request->search), function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->search . '%');
            })->when(isset($request->order), function ($query) use ($request) {
                if ($request->order == 'visit') {
                    $query->latest('visit');
                }
            })->when(!isset($request->order), function ($query) {
                $query->latest('id');
            })->get();

        return view('games.list', compact('games'));
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
            'name' => ['required', 'min:3'],
            'platform' => ['required'],
            'genre' => ['nullable'],
            'description' => ['nullable'],
            'address' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'price' => ['required'],
            'status' => ['sometimes'],
            'city_id' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('/gameImages'), $fileName);
            $request->image = 'gameImages/' . $fileName;
        }

        Game::create([
            'name' => $request->name,
            'platform' => $request->platform,
            'genre' => $request->genre,
            'description' => $request->description,
            'address' => $request->address,
            'image' => $request->image,
            'price' => $request->price,
            'city_id' => $request->city_id,
            'status' => $request->status ?: 2,
            'user_id' => Auth::id(),
        ]);

        return redirect()->to('/games');
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show(Game $game)
    {
        $game->increment('visit');
        $gameInfo = Game::query()->with(['comments' => function ($query) {
            $query->where([['active', 1], ['status', 1]]);
        }, 'likes', 'city'])->find($game->id);
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
