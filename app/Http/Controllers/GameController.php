<?php

namespace App\Http\Controllers;

use App\GameStatics;
use App\Models\Game;
use App\Models\GameCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cookie;



class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isVerifiedUser');
    }
    public function index()
    {
        $games = Game::query()
            ->select('games.*')
            ->where('is_published', true)
            ->paginate(30);
        $gameCategories = GameCategory::query()
            ->select('game_categories.*')
            ->where('is_published', true)
            ->get();
        $gameStatics = Game::query()
            ->select(
                'games.name as game_name',
                'games.picture as game_picture',
                'games.slug as game_slug',
                'game_statics.game_id as game_id',
                'game_statics.game_play_count  as game_statics_game_play_count',
                'users.name as user_name'
            )
            ->join('game_statics', 'games.id', '=', 'game_statics.game_id')
            ->join('users', 'game_statics.user_id','=', 'users.id')
            ->where('is_published', true)
            ->orderBy('game_play_count','DESC')
            ->limit(3)
            ->get();
        return view(
            'game.index',
            [
                'games' => $games,
                'gameCategories' => $gameCategories,
                'gameStatics' => $gameStatics
            ]
        );
    }
    public function show($slug)
    {
        $game = Game::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
        $this->setGamePlayCounter(Auth::user()->id, $slug, $game->id);
        return view('game.show', ['game' => $game]);
    }
    protected function setGamePlayCounter($userId, $slug, $gameId)
    {
        if (!isset($_COOKIE[$slug])) {
            setcookie($slug, $userId, time() + (86400 * 30), "/"); // 86400 = 1 day
            $gameStatic = GameStatics::where('game_id', $gameId)
                ->first();
            if ($gameStatic) {
                $gameStatic->update([
                    'game_play_count' => intval($gameStatic->game_play_count) + 1,
                ]);
            } else {
                GameStatics::create([
                    'game_play_count' => 1,
                    'user_id' => $userId,
                    'game_id' => $gameId
                ]);
            }
        }
        return;
    }
}
