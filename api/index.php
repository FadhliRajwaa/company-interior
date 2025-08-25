
<?php
// Vercel PHP entrypoint for Laravel
$publicPath = __DIR__ . '/../public';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

// Serve static files directly (css, js, images, etc.)
$staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'webp', 'woff', 'woff2', 'ttf', 'eot', 'otf', 'json', 'txt', 'map'];
$pathInfo = parse_url($requestUri, PHP_URL_PATH);
$filePath = realpath($publicPath . $pathInfo);

if ($filePath && strpos($filePath, realpath($publicPath)) === 0 && is_file($filePath)) {
    return require $filePath;
}

// Fallback to Laravel's public/index.php
require $publicPath . '/index.php';
