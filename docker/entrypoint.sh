#!/bin/sh
set -e


# Jalankan storage:link agar symlink public/storage tersedia
php artisan storage:link || true

# Jalankan migrate dan seed hanya jika database bisa diakses
if php artisan migrate:status > /dev/null 2>&1; then
  php artisan migrate:fresh --seed || true
fi

exec /usr/bin/supervisord
