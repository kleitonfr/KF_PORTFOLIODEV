#!/bin/sh
set -e

# Render provides PORT at runtime. Laravel needs to listen on 0.0.0.0.
PORT="${PORT:-10000}"

# This portfolio uses SQLite and does not need database-backed sessions.
export SESSION_DRIVER="${SESSION_DRIVER:-file}"

# Laravel needs an application key. Prefer the value configured in Render.
if [ -z "${APP_KEY:-}" ]; then
    php artisan key:generate --force --no-interaction
fi

# Ensure the SQLite database exists when the app is configured for SQLite.
if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    DB_FILE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
    mkdir -p "$(dirname "$DB_FILE")"
    touch "$DB_FILE"
fi

# Make sure the production Vite manifest/assets exist inside the image.
# This also makes the container self-healing if a previous build cache omitted them.
if [ ! -f public/build/manifest.json ]; then
    npm run build
fi

# Run migrations when explicitly enabled. Disabled by default to avoid surprises.
if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then
    php artisan migrate --force --no-interaction
fi

# Clear any stale Laravel caches before rebuilding production caches.
php artisan optimize:clear
php artisan optimize

exec php artisan serve --host=0.0.0.0 --port="$PORT"
