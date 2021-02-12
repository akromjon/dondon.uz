<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\User;

class IsVerifiedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->phone_number_verified_at == null) {
            if (!isset($_COOKIE['timer'])) {
                setcookie('timer', true, time() + (60), "/");
                $response = Http::withHeaders([
                    'Service' => config('app.sms_tokens')
                ])->post(
                    config('app.sms_url'),
                    [
                        'number' => Auth::user()->phone_number,
                        'status' => 2
                    ]
                );
                $status = json_decode($response->body());
                $user = User::find(Auth::user()->id);
                $user->update(
                    ['verification_code' => $status->data]
                );
            }
            return redirect()->route('phone.verification.show');
        }
        return $next($request);
    }
}
