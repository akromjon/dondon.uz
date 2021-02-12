<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use App\Models\Game;
use App\Models\GameCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class GameController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $gameCategories = GameCategory::query()->select('game_categories.id as id', 'game_categories.name as name')->get();
        return view('admin.game.create', ['gameCategories' => $gameCategories]);
    }


    public function store(GameRequest $request)
    {
        Game::create([
            'game_categories_id' => $request->game_categories_id,
            'name' => $request->name,
            'slug' => $request->name,
            'url' => $request->url,
            'height' => $request->height,
            'width' => $request->width,
            'user_id' => Auth::user()->id,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/game',Str::random(20).'.'.$request->file('picture')->getClientOriginalExtension()) : null,
            'is_published' => boolval($request->is_published)
        ]);
        return redirect()->route('admin.index');
    }
    public function edit($slug)
    {
        $gameCategories = GameCategory::query()->select('game_categories.id as id', 'game_categories.name as name')->get();
        $game = Game::where('slug', $slug)->first();
        return view('admin.game.edit', ['game' => $game,'gameCategories'=>$gameCategories]);
    }

    public function update(GameRequest $request, $slug)
    {
        $game = Game::where('slug', $slug)->first();
        $game->update([
            'game_categories_id' => $request->game_categories_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name).'-'.$game->id,
            'url' => $request->url,
            'height' => $request->height,
            'width' => $request->width,
            'user_id' => Auth::user()->id,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/game',Str::random(20).'.'.$request->file('picture')->getClientOriginalExtension()) : $game->picture,
            'is_published' => boolval($request->is_published)
        ]);
        return redirect()->route('admin.index');
    }

    public function destroy($slug)
    {
        $game = Game::where('slug', $slug)->first();
        $game->delete();
        return redirect()->route('admin.index');
    }
}
