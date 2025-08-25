<?php

/**
 * Vercel Serverless Function Entry Point for Laravel
 */

// Get the request URI
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$publicPath = __DIR__ . '/../public';

// Handle static files directly
if (preg_match('/\.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot|pdf|txt|xml|json)$/', $requestUri)) {
    $filePath = $publicPath . $requestUri;
    if (file_exists($filePath)) {
        // Set appropriate content type
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        $contentTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon',
            'svg' => 'image/svg+xml',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject',
            'pdf' => 'application/pdf',
            'txt' => 'text/plain',
            'xml' => 'application/xml'
        ];
        
        if (isset($contentTypes[$ext])) {
            header('Content-Type: ' . $contentTypes[$ext]);
        }
        
        // Add cache headers for static assets
        header('Cache-Control: max-age=31536000, public');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
        
        readfile($filePath);
        exit;
    }
}

// Set up Laravel environment for Vercel
$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = 'false';

// Require Laravel's public index
require_once $publicPath . '/index.php';
