<?php
$html = file_get_contents('http://localhost:8000/box-by-industry');
preg_match('/<img[^>]*src="([^"]+)"[^>]*class="hero-main-img"/', $html, $matches);
print_r($matches);
