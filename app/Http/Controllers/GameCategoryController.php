<?php

namespace App\Http\Controllers;

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
        $gameCategories=GameCategory::query()->get();
        return view('gameCategory.index',['gameCategories'=>$gameCategories]);
    }

    
    public function show($gameCategorySlug)
    {
        $gameCategory=GameCategory::Where('slug',$gameCategorySlug)->firstOrFail();
        return view('gameCategory.show',['gameCategory'=>$gameCategory]);
    }
    
}
