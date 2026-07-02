<?php
$backupFile = 'd:/bootstrap/temp_backup.blade.php';
$targetFile = 'd:/bootstrap/resources/views/web/product/productdetails.blade.php';

$backupLines = file($backupFile);
$relatedProductsAndRest = implode("", array_slice($backupLines, 919)); // line 920 onwards (0-indexed 919)

$targetContent = file_get_contents($targetFile);
// find <script> at the bottom that I added
$scriptStart = strpos($targetContent, '<script>');
if ($scriptStart !== false) {
    // remove the <script> block and everything after
    $targetContent = substr($targetContent, 0, $scriptStart);
}

// append the related products and rest
$targetContent .= "\n" . $relatedProductsAndRest;

file_put_contents($targetFile, $targetContent);
echo "Restored successfully\n";
