<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyLogin
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
        if ($request->session()->has('useremail')) {
            return  redirect('/creator/home');
        } else {
            return redirect('/login');
        }
    }
}
