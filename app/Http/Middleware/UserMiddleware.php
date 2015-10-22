<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
        if(\Auth::user()->admin == false){
            return redirect()->route('home.index')->withErrors("Você não possui permissão para acessar esta área.");
        }
        return $next($request);
    }
}
