<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyKyc
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
        $user = $request->user();

        if($user->ignore_kyc)  return $next($request);

        if($user->kyc && $user->kyc->isVerified()) return $next($request);

        return to_route('dashboard')->dangerBanner('Please submit your kyc on your profile, to proceed with this transaction.');
    }
}
