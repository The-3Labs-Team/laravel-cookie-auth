<?php

namespace The3LabsTeam\LaravelCookieAuth;

use Closure;
use Illuminate\Http\Request;

class LaravelCookieAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (auth()->check()) {
            $response->withCookie(cookie('skip_cache', true, 5));
        }
        return $response;

    }
}
