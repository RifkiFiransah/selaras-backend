<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('admin')->check() || !Auth::guard('admin')->user() instanceof \App\Models\Admin){
            abort(403);
        }
        return $next($request);
    }

    protected function redirectTo($request, $next): ?string
    {
        return $next($request);
    }
}
