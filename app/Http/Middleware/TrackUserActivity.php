<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Mark as abnormal if inactive for more than 1 hour
            if ($user->last_activity_at && now()->diffInMinutes($user->last_activity_at) > 60) {
                $user->update(['is_abnormal' => true]);
            }

            // Update last activity timestamp
            $user->update(['last_activity_at' => now()]);
        }

        return $next($request);
    }
}
