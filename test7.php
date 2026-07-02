<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$faqs = [
    [
        'question' => 'What is your minimum order quantity?',
        'answer' => 'Our standard minimum order quantity is typically 100 units, but we can accommodate smaller runs depending on the specific box style and material.',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'question' => 'Can I customize the size and design?',
        'answer' => 'Yes! All of our boxes are 100% customizable in terms of size, material, color, and finish to perfectly match your brand.',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'question' => 'How long does production take?',
        'answer' => 'Standard production turnaround is usually 8-12 business days after artwork approval. We also offer expedited shipping if you need your boxes sooner.',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'question' => 'Do you offer free design support?',
        'answer' => 'Absolutely! Our team of packaging experts provides free design assistance to ensure your artwork is print-ready.',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ]
];

DB::table('home_faqs')->insert($faqs);
echo "Inserted default FAQs\n";
