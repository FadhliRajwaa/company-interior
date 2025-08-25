#!/bin/bash

echo "🚀 Vercel Build Script for Laravel"
echo "=================================="

# Build frontend assets
echo "📦 Building frontend assets..."
npm run build

# Install PHP dependencies for production
echo "📦 Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# Clear and cache Laravel configs
echo "⚡ Optimizing Laravel..."
php artisan config:cache || echo "Config cache skipped (no .env in build)"
php artisan route:cache || echo "Route cache skipped"
php artisan view:cache || echo "View cache skipped"

echo "✅ Build completed successfully!"
echo "📁 Files ready for deployment"
