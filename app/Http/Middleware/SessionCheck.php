<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionCheck
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
        if (session()->get('uniCode')) {
            if (session()->get('username')) {
                if (session()->get('password')) {
                    return $next($request);
                } else {
                    return redirect('/gagal-hack');
                }
            } else {
                return redirect('/gagal-hack');    
            }
        } else {
            return redirect('/gagal-hack');
        }
    }
}
