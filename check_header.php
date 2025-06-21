<?php
$url = 'http://localhost:8000'; // Change cette URL selon ton projet Laravel

$headers = get_headers($url, 1);

echo "🔎 Vérification des headers de sécurité pour : $url\n\n";

$expected = [
    'X-Content-Type-Options',
    'X-Frame-Options',
    'X-XSS-Protection',
    'Strict-Transport-Security',
    'Content-Security-Policy',
    'Referrer-Policy',
    'Permissions-Policy',
];

foreach ($expected as $header) {
    if (isset($headers[$header])) {
        echo "✅ $header : " . $headers[$header] . "\n";
    } else {
        echo "❌ $header manquant\n";
    }
}
