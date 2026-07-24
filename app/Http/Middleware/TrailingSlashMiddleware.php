<?php

namespace App\Http\Middleware;

use Closure;

class TrailingSlashMiddleware
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
        if ($request->isMethod('get')) {
            $path = $request->getPathInfo();
            
            // Exclude root and specific files
            if ($path !== '/' && !preg_match('/\.(xml|txt|png|jpg|jpeg|gif|css|js|svg|webp|ico|php)$/i', $path)) {
                
                // If it DOES NOT have a trailing slash, redirect to the trailing slash version
                if (!str_ends_with($path, '/')) {
                    $queryString = $request->getQueryString();
                    $redirectUrl = $request->getSchemeAndHttpHost() . $path . '/' . ($queryString ? '?' . $queryString : '');
                    return redirect()->to($redirectUrl, 301);
                }
                
                // If it DOES have a trailing slash (and it's not root), strip it internally so Laravel's router can find the route
                if (str_ends_with($path, '/')) {
                    $request->server->set('REQUEST_URI', rtrim($request->getRequestUri(), '/'));
                    // Also need to trick Laravel's PathInfo
                    $request->server->set('PATH_INFO', rtrim($path, '/'));
                }
            }
        }

        return $next($request);
    }
}
