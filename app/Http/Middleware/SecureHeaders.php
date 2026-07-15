<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecureHeaders
{
    /**
     * Add security-related HTTP headers to all responses.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add security headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        $response->headers->set('Content-Security-Policy', "default-src 'self'; base-uri 'self'; object-src 'none'; form-action 'self'; frame-ancestors 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://cdn.jsdelivr.net https://cdn.datatables.net https://code.jquery.com https://cdnjs.cloudflare.com https://unpkg.com https://embed.tawk.to https://app.secureprivacy.ai https://cmp.secureprivacy.ai; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net https://cdn.datatables.net https://embed.tawk.to; font-src 'self' data: https://fonts.gstatic.com https://cdn.jsdelivr.net https://embed.tawk.to; img-src 'self' data: blob: https://placehold.co https://www.googletagmanager.com https://embed.tawk.to; connect-src 'self' https://www.google-analytics.com https://va.tawk.to https://embed.tawk.to https://app.secureprivacy.ai https://api-prod.secureprivacy.ai https://cdn.jsdelivr.net; frame-src https://www.googletagmanager.com https://www.youtube.com https://www.youtube-nocookie.com https://embed.tawk.to; upgrade-insecure-requests;");
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        return $response;
    }
}
