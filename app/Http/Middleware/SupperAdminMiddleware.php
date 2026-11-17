<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SupperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
public function handle(Request $request, Closure $next): Response
{
    $admin = auth()->guard('admin')->user();

    if (!$admin) {
        abort(403, 'Bạn không có quyền');
    }

    return $next($request);
}
}
