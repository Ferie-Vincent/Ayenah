# Task Completion Checklist

After any coding task, run in order:

1. **Format**: `./vendor/bin/pint` — fix PHP style
2. **Clear caches**: `php artisan optimize:clear`
3. **Test**: `./vendor/bin/pest` — ensure no regressions
4. **If DB schema changed**: `php artisan migrate` (or `migrate:fresh --seed` in dev)
5. **If frontend assets changed**: `npm run build` (or verify `npm run dev` is running)

## When migrations added

- Ensure migration is reversible (`down()` method correct)
- Check model `$fillable` or `$guarded` is updated

## When routes added

- Run `php artisan route:list` to verify no conflicts
- If admin route: confirm `IsAdmin` middleware applied
