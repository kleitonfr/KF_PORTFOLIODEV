#!/bin/sh
set -e

PORT="${PORT:-10000}"

# This portfolio uses SQLite, but sessions/cache should live on the filesystem.
# This avoids requiring Laravel's database-backed sessions/cache tables.
export SESSION_DRIVER="${SESSION_DRIVER:-file}"
export CACHE_STORE="${CACHE_STORE:-file}"

if [ -z "${APP_KEY:-}" ]; then
    php artisan key:generate --force --no-interaction
fi

if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    DB_FILE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
    mkdir -p "$(dirname "$DB_FILE")"
    touch "$DB_FILE"
fi

# Ensure Laravel's file-based session/cache directories exist and are writable.
mkdir -p storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Build Vite assets if they are not present in the image.
if [ ! -f public/build/manifest.json ]; then
    npm run build
fi

if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then
    php artisan migrate --force --no-interaction
fi

# Clear stale caches without touching the SQLite cache table.
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec php artisan serve --host=0.0.0.0 --port="$PORT"
