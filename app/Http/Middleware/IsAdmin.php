<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
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
        if (auth::user() && auth::user()->email == "wwwalboss10@gmail.com"){
            return $next($request);
        }

        return redirect('/')->with('error', 'You have not admin access');
    }
}
