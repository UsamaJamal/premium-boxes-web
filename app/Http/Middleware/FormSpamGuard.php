<?php

namespace App\Http\Middleware;

use App\Support\SpamGuard;
use Closure;

/**
 * Drops bot submissions to the public contact / quote form endpoints.
 *
 * Rejected requests get the same "thank you" response a real submission gets
 * (matching the existing SpamDetector behaviour) so bots cannot tell they
 * were filtered, and nothing is emailed.
 */
class FormSpamGuard
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
        if (!$request->isMethod('post')) {
            return $next($request);
        }

        $reason = SpamGuard::reject($request);
        if ($reason === false) {
            return $next($request);
        }

        \Log::warning('Form submission dropped as spam', [
            'reason' => $reason,
            'path' => $request->path(),
            'source' => $request->input('source'),
            'ip' => $request->ip(),
            'ua' => substr((string) $request->userAgent(), 0, 200),
        ]);

        $message = 'Thank you for the inquiry, our sales representative will contact soon!';
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => $message]);
        }

        return back()->with('success', $message);
    }
}
