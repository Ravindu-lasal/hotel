<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class UserManageRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentTime = now()->format('H:i');

        $startTime = '00:00';
        $endTime = '23:59';

        if ($currentTime >= $startTime && $currentTime <= $endTime) {
            return $next($request);
        }

        return response()->json([
            'message' => 'Access denied. You can only access this route between '.$startTime .' and '.$endTime .' - Now: ' .$currentTime
        ], 403);
    }
}
