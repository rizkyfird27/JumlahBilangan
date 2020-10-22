<?php

namespace App\Http\Middleware;

use Closure;

class IsSeller
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
        if (empty(auth()->user())) return redirect('/login');

        if (auth()->user()->isSeller()) {

            return $next($request);
        }

        return abort(404);
    }
}
