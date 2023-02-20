<?php

namespace The3LabsTeam\LaravelCookieAuth;

use Closure;
use http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LaravelCookieAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (\Illuminate\Http\Response|RedirectResponse) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (auth()->check()) {
            $cookie = cookie(
                config('cookie-auth.cookie_name'),
                config('cookie-auth.cookie_value'),
                config('cookie-auth.cookie_lifetime')
            );

            if ($response->isRedirection()) {
                $response->withCookie($cookie);
            } else {
                $response->cookie($cookie);
            }

            if (!$response->headers->getCookies() || !$response->headers->getCookies()[0]->getValue(
                )) {
                return new Response('Unable to set skip_cache cookie', 500);
            }
        }

        return $response;
    }
}
