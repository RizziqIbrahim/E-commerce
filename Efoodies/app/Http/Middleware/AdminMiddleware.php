<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->usertype == 'admin')
        {
            return redirect('/admin');
        }else
        {
            return $next($request);
        }
    }
}
