<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
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
        if ($request->has('language')) {
            $path   = $request->path();
            $locale = $request->get('language');
            setcookie('language', $locale, time() + 86400 * 30);
            # set locale           
            \App::setLocale($locale);
            return redirect($path)->withCookie(cookie('language'));
        }

        if ($locale = $request->cookie('language')) {
            \App::setLocale($locale);
        }
        return $next($request);
    }
}
