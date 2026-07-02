<?php

function formatTitle($filename) {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = str_replace('-', ' ', $name);
    $name = ucwords($name);
    return $name;
}

function generateGrid($folderPath, $publicPath) {
    if (!is_dir($folderPath)) return '';
    $files = array_diff(scandir($folderPath), array('.', '..'));
    $html = '<div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px; text-align:center;">' . "\n";
    foreach ($files as $file) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'webp', 'svg'])) {
            $title = formatTitle($file);
            $imgPath = $publicPath . '/' . rawurlencode($file);
            $html .= '    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">' . "\n";
            $html .= '        <div class="cust-card-img" style="height:180px;"><img src="{{ asset(\'' . $imgPath . '\') }}" style="width:100%; height:100%; object-fit:cover;" alt="' . $title . '"></div>' . "\n";
            $html .= '        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">' . $title . '</div>' . "\n";
            $html .= '    </div>' . "\n";
        }
    }
    $html .= '</div>' . "\n";
    return $html;
}

$baseDir = __DIR__ . '/public/uploads';

// Materials -> Corrugated, Fluted Grades, Paper Board, Rigid Material
$materialsHtml = '';
foreach (['Paper Board', 'Corrugated', 'Fluted Grades', 'Rigid Material'] as $sub) {
    $materialsHtml .= '<h3 style="color:#e3b036; margin: 30px 0 15px; text-align:left;">' . $sub . '</h3>' . "\n";
    $materialsHtml .= generateGrid($baseDir . '/' . $sub, 'uploads/' . $sub);
}

// Printing Options
$printingHtml = generateGrid($baseDir . '/Printing Options', 'uploads/Printing Options');

// Special Finishes
$finishesHtml = generateGrid($baseDir . '/Special Finishes', 'uploads/Special Finishes');

// Coating & Laminations
$coatingHtml = generateGrid($baseDir . '/Coating & Laminations', 'uploads/Coating & Laminations');

$finalHtml = '
            <!-- Materials Content -->
            <div class="cust-tab-content active" id="cust-mat">
' . $materialsHtml . '
            </div>

            <!-- Other Tabs Content -->
            <div class="cust-tab-content" id="cust-print" style="display:none;">
' . $printingHtml . '
            </div>
            <div class="cust-tab-content" id="cust-finish" style="display:none;">
' . $finishesHtml . '
            </div>
            <div class="cust-tab-content" id="cust-coat" style="display:none;">
' . $coatingHtml . '
            </div>
';

file_put_contents(__DIR__ . '/tabs_output.html', $finalHtml);
echo "Done\n";
