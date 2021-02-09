<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Verification;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Carbon;


class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('phone_vertification');
    }
    public function show()
    {
        return view('auth.verification');
    }
    public function verify(Verification $request)
    {
        $authUser=Auth::user();
        if (Auth::user()->verification_code == $request->verification_code) {
            $user=User::find($authUser->id);
            $user->update([
                'phone_number_verified_at'=>Carbon::now(),
            ]);
            return redirect()->route('home');
        }
        return redirect()->route('phone.verification.show')->with('status',__('lang.not_matched'));
       
    }
}
