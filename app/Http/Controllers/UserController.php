<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isVerifiedUser');
    }

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($phone_number)
    {
        $user=Auth::user();        
        return view('user.show',['user'=>$user]);
    }

    
    public function update(UserRequest $request)
    {
        $user=\App\User::find(Auth::user()->id);
        $user->update([
            'name'=>$request->name,
        ]);
        return view('user.show',['user'=>$user])->with('status',__('lang.changed_successfully'));
    }    
    
}
