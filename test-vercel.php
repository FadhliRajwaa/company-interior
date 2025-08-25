<?php

/**
 * Vercel Local Testing Script
 * 
 * This script simulates Vercel environment for local testing
 */

echo "🧪 Testing Vercel Configuration Locally...\n\n";

// Simulate Vercel environment variables
$_ENV['VERCEL'] = 'true';
$_ENV['VERCEL_DEMO_MODE'] = 'true';
$_ENV['APP_ENV'] = 'production';

// Test /tmp directory creation
if (!is_dir('/tmp')) {
    mkdir('/tmp', 0755, true);
    echo "✅ /tmp directory created\n";
} else {
    echo "✅ /tmp directory exists\n";
}

// Test cache directory creation
$cacheDir = '/tmp/cache';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
    echo "✅ Cache directory created\n";
} else {
    echo "✅ Cache directory exists\n";
}

// Test file writing permissions
$testFile = '/tmp/test.txt';
if (file_put_contents($testFile, 'test')) {
    echo "✅ /tmp write permissions working\n";
    unlink($testFile);
} else {
    echo "❌ /tmp write permissions failed\n";
}

// Test Laravel bootstrap
try {
    require_once __DIR__ . '/../vendor/autoload.php';
    
    // Simulate Laravel bootstrap
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    echo "✅ Laravel bootstrap successful\n";
} catch (Exception $e) {
    echo "❌ Laravel bootstrap failed: " . $e->getMessage() . "\n";
}

// Test database connection (if available)
try {
    $host = $_ENV['DB_HOST'] ?? 'localhost';
    $port = $_ENV['DB_PORT'] ?? 3306;
    
    if ($host !== 'localhost') {
        $connection = @fsockopen($host, $port, $errno, $errstr, 5);
        if ($connection) {
            echo "✅ Database connection test passed\n";
            fclose($connection);
        } else {
            echo "⚠️  Database connection test failed (might be normal in local env)\n";
        }
    }
} catch (Exception $e) {
    echo "⚠️  Database test skipped: " . $e->getMessage() . "\n";
}

echo "\n🎉 Vercel configuration test completed!\n";
echo "📋 Ready for deployment to Vercel.\n";
