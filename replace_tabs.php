<?php

$categories = [
    'Coating & Laminations' => 'Coating & Laminations',
    'Printing Options' => 'Printing Options',
    'Special Finishes' => 'Special Finishes',
    'Paperboard' => 'Paper Board',
    'Corrugated' => 'Corrugated',
    'Fluted Grades' => 'Fluted Grades',
    'Rigid Materials' => 'Rigid Material'
];

$descriptions = [
    // Coating & Laminations
    'Aqueous Coating' => 'Clear, fast-drying, water-based, and eco-friendly coating. Available in gloss or matte finish.',
    'UV' => 'Fast-drying coating cured with ultraviolet light. Available in gloss or matte finish.',
    'Spot Gloss UV' => 'UV coating that is applied to a specified area and cured using ultraviolet light.',
    'Soft Touch Coating' => 'Soft to the touch coating that creates a velvety texture for a more tactile appeal.',
    'Varnish' => 'Clear coating applied using the CMYK printing method. Available in gloss, satin, or matte.',
    'Lamination' => 'Laminated protective film that adheres to the surface of packaging materials to maximize durability.',
    'Anti Scratch Lamination' => 'Laminated BOPP film that is scratch, scuff, and fingerprint resistant. Cost-effective option.',
    'Soft Touch Silk Lamination' => 'Soft to the touch lamination similar to peach skin. Available in a satin or matte finish.',
];

function formatName($filename) {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = str_replace(['-', '_'], ' ', $name);
    $name = ucwords(trim($name));
    return $name;
}

$output = '<div class="tab-contents-container">' . "\n";
$index = 0;
foreach($categories as $tabName => $folderName) {
    $display = ($index == 0) ? 'grid' : 'none';
    $tabId = str_replace([' ', '&'], ['-', 'and'], strtolower($tabName));
    
    $output .= '            <div class="customize-grid" id="tab-' . $tabId . '" style="display: ' . $display . ';">' . "\n";
    
    $folderPath = 'd:/bootstrap/public/uploads/' . $folderName;
    if(file_exists($folderPath)) {
        $files = scandir($folderPath);
        foreach($files as $file) {
            if(in_array($file, ['.', '..'])) continue;
            
            $formatted = formatName($file);
            $desc = isset($descriptions[$formatted]) ? $descriptions[$formatted] : 'Premium packaging option to elevate your brand.';
            $imgPath = "uploads/" . rawurlencode($folderName) . "/" . rawurlencode($file);
            
            $output .= '                <div class="customize-card">' . "\n";
            $output .= '                    <div class="card-image-area">' . "\n";
            $output .= '                        <img src="{{ asset(\'' . str_replace('%20', ' ', $imgPath) . '\') }}" alt="' . $formatted . '">' . "\n";
            $output .= '                    </div>' . "\n";
            $output .= '                    <div class="card-content">' . "\n";
            $output .= '                        <h3>' . $formatted . '</h3>' . "\n";
            $output .= '                        <p>' . $desc . '</p>' . "\n";
            if(strpos($tabName, 'Coating') !== false) {
                $output .= '                        <div class="card-icons">' . "\n";
                $output .= '                            <span class="icon-circle">♻️</span>' . "\n";
                if(strpos($formatted, 'Aqueous') !== false) {
                    $output .= '                            <span class="icon-circle">🍃</span>' . "\n";
                }
                $output .= '                        </div>' . "\n";
            }
            $output .= '                    </div>' . "\n";
            $output .= '                </div>' . "\n";
        }
    }
    
    $output .= '            </div>' . "\n";
    $index++;
}
$output .= '        </div>';

$output .= '
<script>
document.addEventListener("DOMContentLoaded", function() {
    const filterBtns = document.querySelectorAll(".filter-btn");
    const grids = document.querySelectorAll(".customize-grid");
    
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            
            // Hide all grids
            grids.forEach(grid => grid.style.display = "none");
            
            // Show corresponding grid
            const tabName = this.innerText.trim().toLowerCase().replace(/ /g, "-").replace(/&/g, "and");
            const targetGrid = document.getElementById("tab-" + tabName);
            if(targetGrid) {
                targetGrid.style.display = "grid";
            }
        });
    });
});
</script>
';

// Now replace it in allcategories.blade.php
$file = 'd:/bootstrap/resources/views/web/categories/allcategories.blade.php';
$content = file_get_contents($file);

// Find the start and end of the block to replace
$startTag = '<div class="customize-grid">';
$endTag = '</section>';

$startPos = strpos($content, $startTag);
// Find the last </div> before </section> within the block
$sectionPos = strpos($content, $endTag, $startPos);

// Find the exact slice we want to replace
$toReplace = substr($content, $startPos, $sectionPos - $startPos);
// Wait, $toReplace includes whitespace up to </section>, let's just make sure we replace the first <div class="customize-grid"> up to the end of its block.
// Actually, I can just use preg_replace or explode. 

// A safer way is to read lines.
$lines = file($file);
$newLines = [];
$inGrid = false;
$foundStart = false;

foreach($lines as $line) {
    if(!$foundStart && strpos($line, '<div class="customize-grid">') !== false) {
        $inGrid = true;
        $foundStart = true;
        $newLines[] = $output . "\n";
        continue;
    }
    
    if($inGrid) {
        if(strpos($line, '</section>') !== false && strpos($line, '<!-- testimonal  -->') === false) {
            // we have reached the end of the section
            $inGrid = false;
            $newLines[] = $line;
        }
        continue;
    }
    
    $newLines[] = $line;
}

file_put_contents($file, implode("", $newLines));
echo "Replaced in blade file";
?>
