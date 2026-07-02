<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$blogs = DB::table('blog')->where('author_name', 'like', '%Lorem%')->get();
print_r($blogs);
$testimonials = DB::table('testimonial')->where('name', 'like', '%Lorem%')->get();
print_r($testimonials);
?>
