<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
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

        $isAdmin = !! auth()->guard('admin') -> user() ;


        if( ! $isAdmin )
            return $next($request) ;

        else
            return redirect()->route('admin.dashboard') ;


    }
}
