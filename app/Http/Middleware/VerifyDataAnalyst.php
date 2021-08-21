<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyDataAnalyst
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
        if ($request->session()->get('usertype') == "dataAnalyst") {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}
