<?php

use App\Models\GameCategory;
use Illuminate\Database\Seeder;

class GameCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameCategory::truncate();
        // GameCategory::create([
        //     ''
        // ]);
    }
}
