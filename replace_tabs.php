<?php
$html = file_get_contents('d:/bootstrap/tabs_output.html');
$file = 'd:/bootstrap/resources/views/web/product/productdetails.blade.php';
$content = file_get_contents($file);

$start = '            <!-- Materials Content -->';
$end = '        </div>
    </section>';

$startPos = strpos($content, $start);
$endPos = strpos($content, $end, $startPos);

if ($startPos !== false && $endPos !== false) {
    $newContent = substr($content, 0, $startPos) . ltrim($html) . "        </div>\n    </section>";
    file_put_contents($file, $newContent);
    echo "Replaced successfully\n";
} else {
    echo "Failed to find boundaries\n";
}
