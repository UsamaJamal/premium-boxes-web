<?php
$cat = file_get_contents('resources/views/web/categories/categories.blade.php');

preg_match('/\\/\\* ================================================\n   FOOTER SECTION\n   ================================================ \\*\\/.*?\\/\\* ================================================\n   NEW HERO CSS \\(Copied from allcategories\\)\n   ================================================ \\*\\//s', $cat, $css_match);
$css = str_replace('/* ================================================
   NEW HERO CSS (Copied from allcategories)
   ================================================ */', '', $css_match[0]);

preg_match('/<!-- ================================================\n     FOOTER SECTION\n     ================================================ -->\n<footer class="cp-footer">.*?<\\/footer>/s', $cat, $html_match);
$html = $html_match[0];

preg_match('/    \\/\\/ ── Footer Accordion \\(mobile only\\) ──.*?    \\/\\/ ── FILE UPLOAD ──/s', $cat, $js_match);
$js = '<script>' . PHP_EOL . 'document.addEventListener(\'DOMContentLoaded\', function () {' . PHP_EOL . str_replace('    // ── FILE UPLOAD ──', '', $js_match[0]) . PHP_EOL . '});' . PHP_EOL . '</script>';

$new_footer = '<style>' . PHP_EOL . $css . '</style>' . PHP_EOL . PHP_EOL . $html . PHP_EOL . $js . PHP_EOL;

$footer_file = file_get_contents('resources/views/web/footer.blade.php');
$parts = explode('<!-- ========================= Footer Area End ========================= -->', $footer_file);
$new_full_footer = $new_footer . PHP_EOL . '<!-- ========================= Footer Area End ========================= -->' . $parts[1];

file_put_contents('resources/views/web/footer.blade.php', $new_full_footer);
echo 'Footer updated successfully.';
