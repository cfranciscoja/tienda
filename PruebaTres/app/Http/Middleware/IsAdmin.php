<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
/*
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
*/

    public function handle(Request $request, Closure $next): Closure|RedirectResponse|Response
    {
        if (! $request->user()->isAdmin()) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
