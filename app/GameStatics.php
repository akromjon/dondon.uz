<?php

namespace App;

use App\Models\Game;
use Illuminate\Database\Eloquent\Model;

class GameStatics extends Model
{
    protected $table="game_statics";
    protected $guarded=[];
    public function game()
    {
        return $this->belongsTo(Game::class,'game_id');
    }
}
