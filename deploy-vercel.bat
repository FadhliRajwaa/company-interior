@echo off
echo 🚀 Optimizing Laravel for Vercel Production...

echo Clearing caches...
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo ✅ Caches cleared

echo Creating production caches...
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ✅ Production caches created

echo Optimizing Composer...
composer install --no-dev --optimize-autoloader

echo ✅ Composer optimized

echo Building assets...
npm run build

echo ✅ Assets built

echo.
echo 🎉 Laravel optimized for Vercel deployment!
echo 📋 Next steps:
echo 1. Run: vercel
echo 2. Configure environment variables in Vercel Dashboard
echo 3. Deploy: vercel --prod

pause
