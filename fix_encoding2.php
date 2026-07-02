<?php
$targetFile = 'd:/bootstrap/resources/views/web/product/productdetails.blade.php';
$targetContent = file_get_contents($targetFile);
$nullBytePos = strpos($targetContent, "\0");
if ($nullBytePos !== false) {
    $targetContent = substr($targetContent, 0, $nullBytePos - 5);
}
$gitContent = shell_exec('git show HEAD:resources/views/web/product/productdetails.blade.php');
$startMarker = '    <!-- ==================== RELATED PRODUCTS ==================== -->';
$startPos = strpos($gitContent, $startMarker);
if ($startPos !== false) {
    $relatedProductsAndRest = substr($gitContent, $startPos);
    $targetContent = trim($targetContent);
    if (substr($targetContent, -10) !== '</section>') {
        $targetContent .= "\n        </div>\n    </section>";
    }
    $targetContent .= "\n\n" . $relatedProductsAndRest;
    file_put_contents($targetFile, $targetContent);
    echo "Restored properly\n";
} else {
    echo "Failed\n";
}
