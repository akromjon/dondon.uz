<?php

namespace App\Observers;

use App\Models\Game;
use Illuminate\Support\Str;

class GameObserver
{
    /**
     * Handle the models game "created" event.
     *
     * @param  \App\ModelsGame  $modelsGame
     * @return void
     */
    public function created(Game $game)
    {
        $game->update([
            'slug'=>Str::slug($game->slug).'-'.$game->id
        ]);
    }

    /**
     * Handle the models game "updated" event.
     *
     * @param  \App\game  $game
     * @return void
     */
    public function updated(Game $game)
    {
        //
    }

    /**
     * Handle the models game "deleted" event.
     *
     * @param  \App\game  $game
     * @return void
     */
    public function deleted(Game $game)
    {
        //
    }

    /**
     * Handle the models game "restored" event.
     *
     * @param  \App\game  $game
     * @return void
     */
    public function restored(Game $game)
    {
        //
    }

    /**
     * Handle the models game "force deleted" event.
     *
     * @param  \App\game  $game
     * @return void
     */
    public function forceDeleted(Game $game)
    {
        //
    }
}
