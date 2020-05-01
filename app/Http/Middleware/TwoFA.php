<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;



class TwoFA
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
        if(auth()->user()->isVerified == 1)
        {
            return $next($request);
        }
        elseif(auth()->user()->isVerified == 0)
        {
        return redirect('/verifyOTP');
        }
        
    }
}
