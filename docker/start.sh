#!/bin/sh
set -e

# Render provides PORT at runtime. Laravel needs to listen on 0.0.0.0.
PORT="${PORT:-10000}"

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

# Run migrations when explicitly enabled. Disabled by default to avoid surprises.
if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then
    php artisan migrate --force --no-interaction
fi

php artisan optimize

exec php artisan serve --host=0.0.0.0 --port="$PORT"
