# Conventions

## PHP / Laravel

- PSR-4 autoloading: `App\` → `app/`
- Controllers: thin, delegate to models or Form Requests
- Validation: Form Request classes in `app/Http/Requests/` (one per action)
- Models use `LogsActivity` trait (auto activity logging on create/update/delete)
- No repository pattern — direct Eloquent in controllers
- Admin controllers in `App\Http\Controllers\Admin\` namespace
- Middleware `IsAdmin` guards all `/admin` routes

## Blade / Views

- Layout components: `AppLayout` (authenticated), `GuestLayout` (public/auth)
- Admin views: `resources/views/admin/`
- Frontend views: `resources/views/front/` (or `resources/views/front*.blade.php`)
- Auth views: `resources/views/auth/`

## Assets

- Frontend CSS/JS: `public/front/assets/`
- Admin CSS/JS: `public/admin/assets/`
- Custom responsive CSS: `public/front/assets/css/custom-responsive.css`
- Images organized by section: banner/, blog/, cause/, etc. under `public/front/assets/images/`

## Security

- CSP managed by spatie/laravel-csp
- `SecureHeaders` middleware adds security headers
- CSRF enforced (VerifyCsrfToken middleware)

## Language

- App locale: `en` (`.env APP_LOCALE=en`)
- CLAUDE.md specifies French for communication and documents
- No i18n/translation files evident — UI strings likely hardcoded in Blade
