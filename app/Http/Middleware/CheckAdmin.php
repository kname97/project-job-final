<?php

namespace App\Http\Middleware;

use Closure;
use Auth;   
class CheckAdmin
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
        if (Auth::check()) {

            if (Auth::user()->level == 0)
            {
                return $next($request);
            }
            else
            {
                return back();
            }
        }
        else
        {
            return redirect()->route('adminLogin');
        }
    }
}
