<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    protected $redirectTo = '/';

    public function handle(Request $request, Closure $next, $user_type): Response
    {
        if (Auth::check() && Auth::user()->user_type == $user_type) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}