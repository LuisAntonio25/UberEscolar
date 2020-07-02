<?php

namespace App\Http\Middleware;

use Closure;

class AlreadyLogged
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
        if(session('user_nome')) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
