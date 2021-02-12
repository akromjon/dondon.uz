<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameCategory;
use Illuminate\Http\Request;

class GameCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isVerifiedUser');
    }
  
    public function index()
    {
        $gameCategories=GameCategory::query()
        ->select('game_categories.*')
        ->where('is_published',true)
        ->get();
        return view('game-category.index',['gameCategories'=>$gameCategories]);
    }

    
    public function show($gameCategorySlug)
    {
        $gameCategory=GameCategory::where('slug',$gameCategorySlug)
        ->where('is_published',true)
        ->firstOrFail();
        $gameCategories=GameCategory::get();
        $games=Game::query()
        ->select('games.*')
        ->join('game_categories','games.game_categories_id','=','game_categories.id')
        ->where('game_categories.slug',$gameCategorySlug)
        ->where('game_categories.is_published',true)
        ->where('games.is_published',true)
        ->paginate(30);        
        return view('game-category.show',['gameCategory'=>$gameCategory,'games'=>$games,'gameCategories'=>$gameCategories]);
    }
    
}
