<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GameCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\GameCategoryRequest;

class GameCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.game-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameCategoryRequest $request)
    {
        GameCategory::create([
            'name' => $request->name,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/game/categories',Str::random(20).'.'.$request->file('picture')->getClientOriginalExtension()) : null,
            'description' => $request->description,
            'slug' => Str::slug($request->name, '-') . \Carbon\Carbon::now()->format('d-m-Y'),
            'is_published'=>boolval($request->is_published)
        ]);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $gameCategory=$this->getGameCategoryBySlug($slug);
        return view('admin.game-category.edit',['gameCategory'=>$gameCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $gameCategory=$this->getGameCategoryBySlug($slug);
        return view('admin.game-category.edit', ['gameCategory' => $gameCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameCategoryRequest $request, $slug)
    {
        $gameCategory = $this->getGameCategoryBySlug($slug);
        $gameCategory->update([
            'name' => $request->name,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/game/categories',Str::random(20).'.'.$request->file('picture')->getClientOriginalExtension()) : $gameCategory->picture,
            'description' => $request->description,
            'slug' => Str::slug($request->name, '-') . \Carbon\Carbon::now()->format('d-m-Y'),
            'is_published'=>boolval($request->is_published) 
        ]);
       
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $gameCategory = GameCategory::where('slug', $slug)->firstOrFail();
        $gameCategory->delete();
        return redirect()->route('admin.index')->with('gameCategoryDelete', 'Game Category has been deleted succcessfully');
    }
    private function getGameCategoryBySlug($slug)
    {
        $gameCategory = GameCategory::where('slug', $slug)->firstOrFail();
        return $gameCategory;
    }
}
