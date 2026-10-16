<?php

namespace App\Support;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

/**
 * Server-side anti-bot checks for the public contact / quote forms.
 *
 * Every guarded form embeds (via web/components/spam-guard-fields):
 *   - fsg_t    : encrypted token { issued time, expected captcha sum or null, nonce }
 *   - fsg_site : honeypot text field, hidden from humans, must stay empty
 *   - human_answer (captcha forms only): the visitor's answer to "a + b ="
 *
 * Bots that POST straight to the endpoint have no valid token, fill the
 * honeypot, or cannot answer the captcha, so they are rejected here before
 * any email is sent. The math question itself is generated server side so
 * the browser JS can no longer be the only thing checking it.
 */
class SpamGuard
{
    const TOKEN_FIELD = 'fsg_t';
    const HONEYPOT_FIELD = 'fsg_site';
    const ANSWER_FIELD = 'human_answer';

    /** Humans need at least this long to fill a form. */
    const MIN_SECONDS = 3;
    /** A rendered page is considered stale after this long. */
    const MAX_SECONDS = 6 * 3600;

    /**
     * Encrypted token for a form without a captcha.
     */
    public static function token()
    {
        return self::makeToken(null);
    }

    /**
     * Encrypted token plus the two numbers for a form with a math captcha.
     *
     * @return array{a:int,b:int,token:string}
     */
    public static function captcha()
    {
        $a = random_int(1, 9);
        $b = random_int(1, 9);

        return ['a' => $a, 'b' => $b, 'token' => self::makeToken($a + $b)];
    }

    /**
     * Returns false when the request looks human, or a short reason string
     * when it should be dropped as spam.
     *
     * @return false|string
     */
    public static function reject(Request $request)
    {
        if (trim((string) $request->input(self::HONEYPOT_FIELD)) !== '') {
            return 'honeypot filled';
        }

        $payload = self::readToken($request->input(self::TOKEN_FIELD));
        if ($payload === null) {
            return 'missing or invalid token';
        }

        $age = time() - (int) $payload['t'];
        if ($age < self::MIN_SECONDS) {
            return 'submitted too fast (' . $age . 's)';
        }
        if ($age > self::MAX_SECONDS) {
            return 'token expired';
        }

        if ($payload['c'] !== null) {
            $answer = trim((string) $request->input(self::ANSWER_FIELD));
            if ($answer === '' || (int) $answer !== (int) $payload['c']) {
                return 'captcha answer wrong';
            }
        }

        foreach (['email', 'p_email', 'r_email'] as $field) {
            $value = trim((string) $request->input($field));
            if ($value !== '' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                return 'invalid email in ' . $field;
            }
        }

        foreach (['phone', 'p_phone', 'r_number', 'number', 'contact'] as $field) {
            $value = (string) $request->input($field);
            if (trim($value) !== '' && strlen(preg_replace('/\D+/', '', $value)) < 7) {
                return 'invalid phone in ' . $field;
            }
        }

        foreach (['name', 'first_name', 'last_name', 'p_first_name', 'p_last_name', 'r_name', 'company'] as $field) {
            $value = strtolower((string) $request->input($field));
            if ($value !== '' && preg_match('/https?:|www\.|<a\s|\[url|\[link/i', $value)) {
                return 'link in ' . $field;
            }
        }

        foreach (['message', 'r_message'] as $field) {
            $value = (string) $request->input($field);
            if ($value !== '' && preg_match_all('/https?:\/\/|www\./i', $value) >= 3) {
                return 'too many links in ' . $field;
            }
        }

        return false;
    }

    private static function makeToken($captchaSum)
    {
        return encrypt(json_encode([
            't' => time(),
            'c' => $captchaSum,
            'n' => bin2hex(random_bytes(4)),
        ]));
    }

    /**
     * @return array|null  ['t' => int, 'c' => int|null] or null when the token is not ours.
     */
    private static function readToken($token)
    {
        if (!is_string($token) || $token === '') {
            return null;
        }

        try {
            $payload = json_decode(decrypt($token), true);
        } catch (DecryptException $e) {
            return null;
        }

        if (!is_array($payload) || !isset($payload['t']) || !array_key_exists('c', $payload)) {
            return null;
        }

        return $payload;
    }
}
