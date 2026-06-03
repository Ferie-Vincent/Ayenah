# Ayenah — Core

Laravel 11 charity/NGO platform (MAMP local dev). PHP 8.2.

## Source Map

- `app/Http/Controllers/` — request handlers
  - `Admin/` — admin panel controllers (AdminController, ProjetController, VisiteController, EnregistrementController, FaqController, SettingController, PageContentController)
  - `Auth/` — Breeze auth controllers
  - `FrontController.php` — public frontend
  - `ContributionController.php`, `EnregistrementController.php`, `MessageController.php` — public form submissions
- `app/Models/` — Eloquent models: User, Projet, Visite, Contribution, Enregistrement, Message, Faq, Setting, PageContent, ActivityLog
- `app/Http/Middleware/` — SecureHeaders, IsAdmin, RedirectIfAuthenticated, VerifyCsrfToken
- `app/Http/Requests/` — Form request validation classes
- `app/Traits/LogsActivity.php` — activity logging trait used by models
- `routes/web.php` — all web routes; `routes/auth.php` — auth routes
- `resources/views/` — Blade templates (admin/, front/, auth/)
- `public/front/` — frontend assets (CSS, JS, images)
- `public/admin/` — admin assets
- `database/migrations/` — DB schema history

## Key Invariants

- DB: MySQL via MAMP (port 8889), db `db_ayenah`, user/pass `root/root`
- No API routes — web-only, session-based auth
- Admin area gated by `IsAdmin` middleware
- `LogsActivity` trait auto-logs model events to `activity_logs` table

See `mem:tech_stack`, `mem:conventions`, `mem:suggested_commands`, `mem:task_completion`
