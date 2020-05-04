<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckEmployer
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

            if (Auth::user()->level == 2)
            {
                return $next($request);
            }
            else
            {
                return redirect()->back()->with('atention','Bạn không phải là Nhà tuyển dụng');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
