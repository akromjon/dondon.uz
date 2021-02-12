<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\GameCategory;
use App\UserComment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');    
        // $this->middleware('phone_vertification');   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $games = Game::query()
            ->select('games.*')
            ->orderBy('id', 'DESC')
            ->where('is_published', true)
            ->limit(15)
            ->get();
        $users = User::query()
            ->select('users.name as name', 'users.phone_number as phone_number', 'users.created_at as created_at')
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
        $userComments = UserComment::query()
            ->select('user_comments.comment as comment', 'user_comments.created_at as created_at', 'users.name as user_name')
            ->join('users', 'user_comments.user_id', '=', 'users.id')
            ->orderBy('user_comments.id', 'DESC')
            ->where('is_published', true)
            ->limit(6)
            ->get();
        return view('welcome', [
            'games' => $games,
            'users' => $users,
            'userComments' => $userComments
        ]);
    }
}
