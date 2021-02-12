<?php

namespace App\Observers;

use App\Models\GameCategory;

class GameCategoryObserver
{
    /**
     * Handle the game category "created" event.
     *
     * @param  \App\GameCategory  $gameCategory
     * @return void
     */
    public function created(GameCategory $gameCategory)
    {
        $gameCategory->update(
            [
                'slug' => $gameCategory->slug . '-' . $gameCategory->id,
            ]
        );
    }

    /**
     * Handle the game category "updated" event.
     *
     * @param  \App\GameCategory  $gameCategory
     * @return void
     */
    public function updated(GameCategory $gameCategory)
    {
        //
    }

    /**
     * Handle the game category "deleted" event.
     *
     * @param  \App\GameCategory  $gameCategory
     * @return void
     */
    public function deleted(GameCategory $gameCategory)
    {
        //
    }

    /**
     * Handle the game category "restored" event.
     *
     * @param  \App\GameCategory  $gameCategory
     * @return void
     */
    public function restored(GameCategory $gameCategory)
    {
        //
    }

    /**
     * Handle the game category "force deleted" event.
     *
     * @param  \App\GameCategory  $gameCategory
     * @return void
     */
    public function forceDeleted(GameCategory $gameCategory)
    {
        //
    }
}
