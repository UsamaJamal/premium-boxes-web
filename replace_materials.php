<?php
$file = 'd:/bootstrap/resources/views/web/product/productdetails.blade.php';
$content = file_get_contents($file);

$start = '<div class="cust-tab-content active" id="cust-mat">';
$end = '<!-- Other Tabs Content -->';

$startPos = strpos($content, $start);
$endPos = strpos($content, $end, $startPos);

if ($startPos !== false && $endPos !== false) {
    $materialsHtml = "
<h3 style=\"color:#e3b036; margin: 30px 0 15px; text-align:left;\">Paper Board</h3>
<div style=\"display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px; text-align:center;\">
    <div class=\"cust-card\" style=\"background:#1f1f1f; border-radius:8px; overflow:hidden;\">
        <div class=\"cust-card-img\" style=\"height:180px;\"><img src=\"{{ asset('uploads/Paper Board/black-kraft.webp') }}\" style=\"width:100%; height:100%; object-fit:cover;\" alt=\"Black Kraft\"></div>
        <div class=\"cust-card-title\" style=\"color:#fff; padding:15px; font-size:12px; font-weight:600;\">Black Kraft</div>
    </div>
</div>
<h3 style=\"color:#e3b036; margin: 30px 0 15px; text-align:left;\">Corrugated</h3>
<div style=\"display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px; text-align:center;\">
    <div class=\"cust-card\" style=\"background:#1f1f1f; border-radius:8px; overflow:hidden;\">
        <div class=\"cust-card-img\" style=\"height:180px;\"><img src=\"{{ asset('uploads/Corrugated/bleached-white-board-.webp') }}\" style=\"width:100%; height:100%; object-fit:cover;\" alt=\"Bleached White Board\"></div>
        <div class=\"cust-card-title\" style=\"color:#fff; padding:15px; font-size:12px; font-weight:600;\">Bleached White Board</div>
    </div>
</div>
<h3 style=\"color:#e3b036; margin: 30px 0 15px; text-align:left;\">Fluted Grades</h3>
<div style=\"display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px; text-align:center;\">
    <div class=\"cust-card\" style=\"background:#1f1f1f; border-radius:8px; overflow:hidden;\">
        <div class=\"cust-card-img\" style=\"height:180px;\"><img src=\"{{ asset('uploads/Fluted Grades/a-flute.webp') }}\" style=\"width:100%; height:100%; object-fit:cover;\" alt=\"A Flute\"></div>
        <div class=\"cust-card-title\" style=\"color:#fff; padding:15px; font-size:12px; font-weight:600;\">A Flute</div>
    </div>
</div>
<h3 style=\"color:#e3b036; margin: 30px 0 15px; text-align:left;\">Rigid Material</h3>
<div style=\"display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px; text-align:center;\">
    <div class=\"cust-card\" style=\"background:#1f1f1f; border-radius:8px; overflow:hidden;\">
        <div class=\"cust-card-img\" style=\"height:180px;\"><img src=\"{{ asset('uploads/Rigid Material/Duplex-Chipboard-.webp') }}\" style=\"width:100%; height:100%; object-fit:cover;\" alt=\"Duplex Chipboard\"></div>
        <div class=\"cust-card-title\" style=\"color:#fff; padding:15px; font-size:12px; font-weight:600;\">Duplex Chipboard</div>
    </div>
</div>
            </div>

            ";
    
    $newContent = substr($content, 0, $startPos + strlen($start)) . ltrim($materialsHtml) . substr($content, $endPos);
    file_put_contents($file, $newContent);
    echo "Replaced successfully\n";
} else {
    echo "Failed to find boundaries\n";
}
