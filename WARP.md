# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

The AYENAH platform is a Laravel-based digital platform connecting the Ivorian diaspora with local development initiatives. It's funded by the French Development Agency (AFD) and managed by the General Directorate of Ivorians Abroad (DGIE) in collaboration with Expertise France.

## Development Environment Setup

### Core Technologies
- **Backend**: Laravel 11.31+ (PHP 8.2+)
- **Frontend**: Vite + TailwindCSS + Alpine.js
- **Database**: SQLite (default) or MySQL/PostgreSQL
- **Testing**: Pest PHP (Feature & Unit tests)
- **Monitoring**: Sentry integration for error tracking

### Quick Start Commands

```bash
# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate

# Start development servers (all services)
composer run dev

# Individual services
php artisan serve                    # Laravel server
npm run dev                         # Vite dev server
php artisan queue:listen --tries=1  # Queue worker
php artisan pail --timeout=0       # Log viewer
```

### Build and Deploy

```bash
# Production build
npm run build

# Code quality checks
./vendor/bin/pint                   # Code formatting (Laravel Pint)

# Testing
php artisan test                    # Run all tests
./vendor/bin/pest                   # Direct Pest command
./vendor/bin/pest --filter=Feature # Run only feature tests
./vendor/bin/pest --filter=Unit    # Run only unit tests
```

## Architecture Overview

### Core Domain Models

The platform manages three primary entities:

- **Enregistrements**: Diaspora member registrations with project interests and financial contributions
- **Projets**: Development projects with local/diaspora partnerships, funding requirements, and documentation
- **Contributions**: Financial contributions linking diaspora members to specific projects

### Application Structure

```
app/
├── Http/Controllers/
│   ├── FrontController.php          # Public pages (home, about, projects, etc.)
│   ├── EnregistrementController.php # Diaspora registration
│   ├── ContributionController.php   # Project contributions
│   ├── MessageController.php        # Contact form handling
│   └── Admin/                       # Admin dashboard controllers
├── Models/
│   ├── Enregistrement.php           # Diaspora member registration
│   ├── Projet.php                   # Development projects
│   ├── Contribution.php             # Project contributions
│   └── User.php                     # Admin users
└── View/Components/                 # Blade components for layouts
```

### Key Routes Structure

- **Public Routes**: `/`, `/about`, `/projects`, `/contribution`, `/contact`
- **Authentication**: Laravel Breeze with email verification
- **Admin Dashboard**: `/dashboard` (authenticated users only)
- **Document Downloads**: Technical and instruction sheets
- **SEO Features**: Auto-generated sitemap and robots.txt

### Security Configuration

- **CSP (Content Security Policy)**: Configured via Spatie package
- **Secure Headers**: Custom middleware implementation
- **Sentry Integration**: Error tracking and performance monitoring
- **Input Validation**: CSRF protection and form request validation

## Database Architecture

### Primary Tables
- `enregistrements`: Diaspora member profiles with project interests
- `projets`: Development projects with partnership details
- `contributions`: Financial contributions linking members to projects
- `users`: Admin user accounts with authentication

### Key Relationships
- Contributions belong to Projects (`contribution.projet_id → projets.id`)
- Projects have many Contributions (one-to-many relationship)

## Development Patterns

### Frontend Stack
- **TailwindCSS**: Utility-first styling with forms plugin
- **Alpine.js**: Reactive behavior for UI interactions  
- **Vite**: Asset bundling with hot module replacement
- **Blade Templates**: Server-side rendering with component architecture

### Testing Strategy
- **Pest PHP**: BDD-style testing framework
- **Feature Tests**: Full HTTP request/response testing with database refresh
- **Authentication Tests**: Complete auth flow coverage including email verification
- **Database**: Uses `:memory:` SQLite for fast test execution

### Code Quality
- **Laravel Pint**: Automated code formatting following Laravel conventions
- **SonarCloud Integration**: Quality gates with metrics for code smells and duplicates

## Product Specification

The full product specification (feature roadmap, business rules, copy guidelines, data models) is maintained at:

```
docs/SPEC-PLATEFORME.md
```

This document covers:
- Cadre institutionnel AYENAH (DGIE / AFD / CRPM II) — NON NÉGOCIABLE
- État actuel de la plateforme (fonctionnalités implémentées)
- Spécification complète du Mur d'Opportunités (à implémenter)
- Règles de copy et vocabulaire obligatoire
- Périmètre V1 (hors scope explicite)
- Index des décisions prises

**Always read `docs/SPEC-PLATEFORME.md` before working on new features.**

## Special Considerations

### Multilingual Support
- Configured for French as the primary language (targeting Ivorian diaspora)
- Localization ready with Laravel's translation system

### File Handling
- Document uploads for project presentations and logos
- PDF downloads for technical and instruction documentation
- Image processing via Intervention Image package

### Queue System
- Database-driven queue for background job processing
- Email notifications and file processing tasks
- Development setup includes queue worker in concurrent development command

### Performance Monitoring
- Comprehensive Sentry configuration for error tracking
- Performance tracing for SQL queries, views, and HTTP requests
- Queue job monitoring and command tracking
