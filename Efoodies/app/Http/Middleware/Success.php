<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Success
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
        if(Session::has('success')) {
            Session::flash('success', 'Successfully Purchased Products!');
            return redirect()->route('user-menu');
        }
        return $next($request);
    }
}
