<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::user()->role == 'admin' || Auth::user()->role == 'editor' || Auth::user()->role == 'user') {
        //     return $next($request);
        // }
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } elseif (Auth::user()->role == 'editor') {
                return $next($request);
            } elseif (Auth::user()->role == 'user') {
                return $next($request);
            } else {
                return redirect('login');
            }
        }
    }
}