<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeadersMiddleware
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
        $response = $next($request);

        if (property_exists($response, 'headers')) {
            // HSTS Header
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
            // X-Frame-Options
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
            // X-Content-Type-Options
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            // Referrer Policy
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
            // Content Security Policy (Basic)
            $response->headers->set('Content-Security-Policy', "upgrade-insecure-requests");
        }

        return $response;
    }
}
