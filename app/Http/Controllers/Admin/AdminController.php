<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameCategory;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::query()
            ->select('users.phone_number as phone_number', 'users.status as status', 'users.old_status as old_status', 'users.id as id')
            ->orderBy('id', 'DESC')
            ->paginate(30)
            ->fragment('users');
        $gameCategories = GameCategory::query()
            ->select('game_categories.*')
            ->orderBy('id', 'DESC')
            ->paginate(20)
            ->fragment('game_categories');
        $games = Game::query()
            ->select('games.id as id', 'games.picture as picture', 'games.slug as slug', 'games.name as name', 'game_categories.name as category_name', 'users.name as user_name')
            ->join('game_categories', 'games.game_categories_id', '=', 'game_categories.id')
            ->join('users', 'games.user_id', '=', 'users.id')
            ->orderBy('id', 'DESC')
            ->paginate(20)
            ->fragment('games');
        return view('admin.home.index', ['users' => $users, 'gameCategories' => $gameCategories, 'games' => $games]);
    }
}
