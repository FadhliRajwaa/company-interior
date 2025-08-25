

# Stage 1: Build frontend assets
FROM node:18 AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
# Pastikan build asset Vite menggunakan HTTPS
ENV NODE_ENV=production
ENV VITE_ASSET_URL=https://company-interior.onrender.com
ENV ASSET_URL=https://company-interior.onrender.com
RUN npm run build

# Stage 2: Composer dependencies
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Stage 3: Production image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx supervisor git curl unzip libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy app files
COPY . .

# Copy built frontend
COPY --from=frontend /app/public/build ./public/build

# Copy vendor
COPY --from=vendor /app/vendor ./vendor

# Nginx config
COPY ./docker/nginx.conf /etc/nginx/nginx.conf

# Supervisor config
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Laravel permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80

# Otomatis migrate dan seed database saat container start
CMD php artisan migrate:fresh --seed && /usr/bin/supervisord
