# Suggested Commands

## Dev Server (full stack via MAMP)

MAMP must be running with Apache on port 80 (or 8888) and MySQL on 8889.
App URL configured in `.env` as `http://localhost`.

## Artisan

```bash
cd /Applications/MAMP/htdocs/ayenah/Ayenah-main
php artisan serve          # Laravel dev server (port 8000)
php artisan migrate        # Run migrations
php artisan migrate:fresh --seed  # Reset DB + seed
php artisan db:seed        # Seed only
php artisan tinker         # REPL
php artisan route:list     # Show all routes
php artisan cache:clear    # Clear all caches
php artisan config:clear
php artisan view:clear
php artisan optimize:clear # All of the above at once
```

## Frontend

```bash
npm run dev    # Vite dev with HMR
npm run build  # Production build
```

## Full dev (concurrently via composer script)

```bash
composer dev   # Starts artisan serve + queue + pail + vite
```

## Testing

```bash
./vendor/bin/pest          # Run all tests
./vendor/bin/pest --filter=FeatureName
```

## Code style

```bash
./vendor/bin/pint          # Format PHP (Laravel Pint)
```

## Darwin-specific notes

- PHP binary: use system PHP 8.2 or MAMP's `/Applications/MAMP/bin/php/php8.2.x/bin/php`
- MySQL CLI: `/Applications/MAMP/Library/bin/mysql -u root -proot db_ayenah`
