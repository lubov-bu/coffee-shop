<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminRole
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->isAdmin())) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
