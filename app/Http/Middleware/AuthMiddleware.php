<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            return redirect('/login')->withErrors([
                "auth" => "You need to be connected to access this page.",
            ]);
        };

        return $next($request);
    }
}
