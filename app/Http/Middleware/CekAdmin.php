<?php

namespace App\Http\Middleware;

use Closure;
// use App\User;

//ini middleware untuk validasi apakah yang mengakses route itu admin atau bukan
class CekAdmin
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
        if(auth()->user()->role == 'admin'){
            return $next($request);
        }
        return response()->view('error.404');
    }
}
