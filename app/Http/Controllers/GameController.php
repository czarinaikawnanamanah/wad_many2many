<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('players')->get();
        return response()->json($games);
    }

    public function store(Request $request)
    {
        $game = Game::create($request->all());
        return response()->json($game, 201);
    }

    public function show($id)
    {
        $game = Game::with('players')->find($id);
        return response()->json($game);
    }

    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        $game->update($request->all());
        return response()->json($game);
    }

    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        return response()->json(null, 204);
    }
}
