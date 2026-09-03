<?php

namespace App\Helpers;

class SpamDetector
{
    /**
     * Detect if an inquiry/quote submission is spam.
     *
     * @param string $content
     * @param string $type
     * @param string $emailOrPhone
     * @return bool|string Returns false if legitimate (not spam), or string reason if spam.
     */
    public static function isSpam($content = '', $type = '', $emailOrPhone = '')
    {
        $content = (string) $content;
        $emailOrPhone = (string) $emailOrPhone;

        // Basic spam keyword filter (case-insensitive)
        $spamKeywords = [
            'seo service',
            'first page of google',
            'rank #1',
            'crypto investment',
            'bitcoin', 'ethereum',
            'casino', 'poker', 'viagra', 'cialis',
            'buy followers', 'increase traffic',
            'http://', 'https://' // URLs in simple contact message fields can often be spam links unless needed
        ];

        $lowerContent = strtolower($content);

        // Check if message content contains spam links/keywords (except legitimate quote specs)
        foreach ($spamKeywords as $keyword) {
            if ($keyword === 'http://' || $keyword === 'https://') {
                // If it's just a regular quote submission without obvious spam text, allow URLs unless spam terms present
                continue;
            }
            if (strpos($lowerContent, $keyword) !== false) {
                return 'Spam keyword detected: ' . $keyword;
            }
        }

        return false;
    }
}
