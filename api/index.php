<?php

/**
 * Vercel Serverless Function Entry Point
 * 
 * This file handles all requests in Vercel's serverless environment
 * and forwards them to Laravel's public/index.php with optimizations.
 */

// Check if we're in Vercel environment
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL_ENV'])) {
    // Set Vercel-specific configurations
    $_ENV['VERCEL_DEMO_MODE'] = 'true';
    $_ENV['APP_ENV'] = 'production';
    $_ENV['APP_DEBUG'] = 'false';
    
    // Ensure /tmp directory permissions
    if (!is_dir('/tmp')) {
        mkdir('/tmp', 0755, true);
    }
    
    // Set storage paths for Vercel
    $_ENV['APP_STORAGE_PATH'] = '/tmp';
    $_ENV['VIEW_COMPILED_PATH'] = '/tmp';
    $_ENV['CACHE_DRIVER'] = 'array';
    $_ENV['SESSION_DRIVER'] = 'cookie';
    $_ENV['LOG_CHANNEL'] = 'stderr';
}

// Handle static files
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$publicPath = __DIR__ . '/../public';

// Check if it's a static file request
if (preg_match('/\.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$/', $requestUri)) {
    $filePath = $publicPath . $requestUri;
    if (file_exists($filePath)) {
        // Set appropriate content type
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        $contentTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon',
            'svg' => 'image/svg+xml',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject'
        ];
        
        if (isset($contentTypes[$ext])) {
            header('Content-Type: ' . $contentTypes[$ext]);
        }
        
        header('Cache-Control: max-age=31536000');
        readfile($filePath);
        exit;
    }
}

// Forward to Laravel's public entry point
require $publicPath . '/index.php';
