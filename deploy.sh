#!/bin/bash
cd /Users/waseemrashdi/Desktop/laravel-github
git pull origin main
composer install --no-interaction --prefer-dist --optimize-autoloader
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
