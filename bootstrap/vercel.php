<?php

/*
|--------------------------------------------------------------------------
| Vercel Serverless Optimization
|--------------------------------------------------------------------------
|
| This file contains optimizations specific to Vercel serverless deployment.
| It configures cache paths and storage to work with Vercel's /tmp directory.
|
*/

if (isset($_ENV['VERCEL_DEMO_MODE']) || isset($_SERVER['VERCEL_DEMO_MODE'])) {
    // Set writable directories to /tmp for Vercel
    $_ENV['APP_STORAGE_PATH'] = '/tmp';
    $_ENV['VIEW_COMPILED_PATH'] = '/tmp';
    $_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
    $_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
    $_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
    $_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
    $_ENV['APP_EVENTS_CACHE'] = '/tmp/events.php';
    
    // Ensure bootstrap cache uses environment variables
    $app = require_once __DIR__ . '/app.php';
    
    return $app;
}

// Default bootstrap for local development
return require_once __DIR__ . '/app.php';
