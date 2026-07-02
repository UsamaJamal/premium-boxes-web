<?php
$targetFile = 'd:/bootstrap/resources/views/web/product/productdetails.blade.php';

$targetContent = file_get_contents($targetFile);

// Remove the corrupted UTF-16 part (it starts at the newline after the missing closing tags)
// We know it was appended right after the script tag removal.
// Actually, it's easier to just take the good part of $targetContent.
// Let's find the closing tag `            </div>`
// Wait, the "Customize Your Box" section had a closing `        </div>\n    </section>`

$goodEndPos = strpos($targetContent, '    </section>');
// but wait, the last </section> is the one we want.
// Let's just find the first occurrence of UTF-16 null bytes and truncate.
$nullBytePos = strpos($targetContent, "\0");
if ($nullBytePos !== false) {
    // Truncate before the null byte, actually maybe a bit before the weird characters
    $targetContent = substr($targetContent, 0, $nullBytePos - 5);
}

// Now get the original content from git via PHP so we avoid PowerShell encoding issues
$gitContent = shell_exec('git show HEAD:resources/views/web/product/productdetails.blade.php');

$startMarker = '    <!-- ==================== RELATED PRODUCTS ==================== -->';
$startPos = strpos($gitContent, $startMarker);

if ($startPos !== false) {
    $relatedProductsAndRest = substr($gitContent, $startPos);
    
    // We also need to make sure the Customize tab is properly closed
    // In my previous replacement, it ended with:
    // </div>
    // </div>
    // </section>
    
    // Let's just append the related products block directly.
    // Wait, the original gitContent had:
    //         </div>
    //     </section>
    //     <!-- ==================== RELATED PRODUCTS ==================== -->
    // Let's make sure the targetContent ends with </section> properly.
    
    $targetContent = trim($targetContent);
    if (!str_ends_with($targetContent, '</section>')) {
        $targetContent .= "\n        </div>\n    </section>";
    }
    
    $targetContent .= "\n\n" . $relatedProductsAndRest;
    
    file_put_contents($targetFile, $targetContent);
    echo "Restored properly\n";
} else {
    echo "Failed to find related products marker in git content\n";
}
