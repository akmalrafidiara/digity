<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // dd($request->user()->role_id == $role, $request->user()->role_id, $role);
        // dd($roles);
        foreach ($roles as $role) {
            if ($request->user()->role_id == $role)
                return $next($request);
        }
        return abort(403);
    }
}
