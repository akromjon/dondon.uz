<?php

namespace App\Providers;

use App\Models\GameCategory;
use App\Observers\GameCategoryObserver;
use App\Observers\GameObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use App\Observers\UserObserver;
use App\Models\Game;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        View::composer('layouts.menu', function($view) {
            $directory = base_path('resources/lang/');
            $languages = \File::directories($directory);
            $view->with('languages', array_map('basename', $languages));
        });
        User::observe(UserObserver::class);
        GameCategory::observe(GameCategoryObserver::class);
        Game::observe(GameObserver::class);
    }
}
