<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $mailHost = env('MAIL_HOST', 'smtp.hostinger.com');
    $mailPort = env('MAIL_PORT', 465);
    $mailEnc = env('MAIL_ENCRYPTION', 'ssl');
    $mailUser = env('MAIL_USERNAME');
    $mailPass = env('MAIL_PASSWORD');
    $mailTo = env('QUOTE_MAIL_TO', 'quote@premiumboxes.com');

    echo "Host: $mailHost, Port: $mailPort, Enc: $mailEnc, User: $mailUser, To: $mailTo\n";
    $transport = (new \Swift_SmtpTransport($mailHost, (int)$mailPort, $mailEnc))
        ->setUsername($mailUser)
        ->setPassword($mailPass)
        ->setAuthMode('login');

    $mailer = new \Swift_Mailer($transport);
    $message = (new \Swift_Message('Test Quote Email'))
        ->setFrom([$mailUser => 'Premium Boxes'])
        ->setTo([$mailTo])
        ->setBody('This is a test quote email from server.', 'text/html');

    $result = $mailer->send($message);
    echo "SUCCESS: Sent $result email\n";
} catch (\Throwable $e) {
    echo "ERROR: " . $e->GetMessage() . "\n" . $e->getTraceAsString() . "\n";
}
