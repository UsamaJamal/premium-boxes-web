<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Returns a hard HTTP 410 Gone for URL paths that were injected by a past
 * site compromise (spam URLs indexed by search engines under /item/*).
 *
 * This runs as a GLOBAL middleware BEFORE TrailingSlashMiddleware so the
 * response is a direct 410 from the original URL: no 301/302 redirect and
 * no Location header. That is what tells Google & Bing to permanently
 * de-index the URLs.
 *
 * To retire additional hacked path prefixes in the future, add them to
 * the $gonePrefixes list below.
 */
class GoneUrls
{
    /**
     * Path prefixes (without leading slash) that must return 410 Gone.
     * A prefix "item" matches exactly "/item" and anything under "/item/...".
     *
     * @var string[]
     */
    protected $gonePrefixes = [
        'item',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Normalise: leading slash trimmed, trailing slash trimmed, lower-cased.
        $path = strtolower(trim($request->getPathInfo(), '/'));

        foreach ($this->gonePrefixes as $prefix) {
            if ($path === $prefix || strpos($path, $prefix . '/') === 0) {
                return response('410 Gone', 410)
                    ->header('Content-Type', 'text/plain; charset=UTF-8');
            }
        }

        return $next($request);
    }
}
