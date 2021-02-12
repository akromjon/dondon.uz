<?php

namespace App\Models;

use App\User;
use App\Models\GameCategory;
use Illuminate\Database\Eloquent\Model;
use App\GameStatics;
use Illuminate\Support\Facades\DB;

class Game extends Model
{
    protected $table = "games";
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function game_categories()
    {
        return $this->belongsTo(GameCategory::class, 'game_categories_id');
    }
    public function players($gameId)
    {
        $games = DB::table('game_statics')
            ->where('game_statics.game_id', $gameId)
            ->count();
        return $games;
    }
}
