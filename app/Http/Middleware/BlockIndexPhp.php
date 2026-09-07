<?php

namespace App\Http\Middleware;

use Closure;

class BlockIndexPhp
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
        if (strpos(strtolower($request->getRequestUri()), '/index.php') !== false) {
            $host = $request->getSchemeAndHttpHost();
            return redirect($host . '/404.php');
        }

        return $next($request);
    }
}
