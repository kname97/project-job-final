<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckEmployee
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

            if (Auth::user()->level == 1)
            {
                return $next($request);
            }
            else
            {
                return redirect()->back()->with('atention','Bạn không phải là Người tìm việc');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
