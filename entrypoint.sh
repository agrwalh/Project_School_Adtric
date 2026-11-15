#!/bin/bash
set -e

export PORT=${PORT:-80}
sed -i "s/Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost .*>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Ensure storage link exists
php artisan storage:link || true

# If APP_KEY is missing, generate one
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force || true
fi

# Run database migrations and seeders automatically if database is configured
echo "=== Running Laravel Database Migrations ==="
php artisan migrate --force || echo "Migration skipped or database not ready yet."

echo "=== Seeding Database (Admin & News Events) ==="
php artisan db:seed --force || echo "Seeder skipped."

# Cache configs for maximum speed
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

echo "=== Starting Apache Web Server on port ${PORT} ==="
exec apache2-foreground
