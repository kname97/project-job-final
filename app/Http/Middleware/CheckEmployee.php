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
                toastr()->warning('Bạn cần phải là người tìm việc mới được phép sử dụng tính năng này');
                return back()->with('atention','Bạn cần phải là người tìm việc mới được phép sử dụng tính năng này');
            }
        }
        else
        {
            toastr()->warning('Bạn cần phải là người tìm việc mới được phép sử dụng tính năng này');
            return back()->with('atention','Bạn cần phải là người tìm việc mới được phép sử dụng tính năng này');
        }
    }
}
