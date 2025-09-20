<?php

require_once 'vendor/autoload.php';

use Illuminate\Support\Facades\Mail;

try {
    // Test basic mail functionality
    Mail::raw('Test email content', function($message) {
        $message->to('test@example.com')
                ->subject('Test Subject');
    });

    echo "Mail test completed successfully\n";

} catch (Exception $e) {
    echo "Mail test failed: " . $e->getMessage() . "\n";
    echo "Stack trace: " . $e->getTraceAsString() . "\n";
}
