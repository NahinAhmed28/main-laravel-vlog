<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(auth()->check() && auth()->user()->role_id == 2)
        {
//            dd('user');
            return $next($request);
        }


        else{
            return redirect()->route('login');
        }
    }
}

