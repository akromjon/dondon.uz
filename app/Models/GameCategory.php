<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class GameCategory extends Model
{
    protected $table="game_categories";
    protected $guarded = [];
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
