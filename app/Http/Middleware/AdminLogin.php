<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        if(session()->exists('adminIsLogin')) {
            if($request->path() == 'admin/loginPage')
                return redirect('/admin/dashboard');
            return $next($request);
        }
        return redirect('/admin/loginPage');
    }
}
