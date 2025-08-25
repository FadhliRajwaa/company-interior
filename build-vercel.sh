#!/bin/bash

# Vercel Build Script untuk Laravel
echo "🔨 Building Laravel application for Vercel..."

# Install dependencies dan build assets
npm install
npm run build

# Copy public directory contents ke root untuk Vercel
echo "📁 Copying public files..."
mkdir -p dist
cp -r public/* dist/

# Copy vendor dan storage yang dibutuhkan
echo "📦 Copying Laravel files..."
cp -r vendor dist/
cp -r storage dist/
cp -r bootstrap dist/
cp -r app dist/
cp -r config dist/
cp -r database dist/
cp -r resources dist/
cp -r routes dist/
cp composer.json dist/
cp composer.lock dist/
cp artisan dist/

echo "✅ Build completed!"
