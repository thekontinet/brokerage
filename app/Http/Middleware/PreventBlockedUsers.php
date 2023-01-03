<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBlockedUsers
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
        if(auth()->user()->is_blocked){
            auth()->logout();
            return redirect()->route('login')->with('status', 'Sorry your account cannot be accessed or has been blocked');
        }
        return $next($request);
    }
}
