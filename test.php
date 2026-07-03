<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=premium-boxes', 'root', '');
print_r($pdo->query('SELECT COUNT(*) FROM product_reviews')->fetchAll(PDO::FETCH_ASSOC));
