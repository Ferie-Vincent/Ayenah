<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuration initiale — AYENAH</title>

    <link rel="icon" href="{{ asset('front/assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f0f4f8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .setup-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 32px rgba(0,0,0,.08);
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 440px;
        }
        .setup-badge {
            display: inline-block;
            background: #fff3cd;
            color: #856404;
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: .04em;
            text-transform: uppercase;
            padding: .25rem .75rem;
            border-radius: 999px;
            margin-bottom: 1.25rem;
        }
        .setup-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: .25rem;
        }
        .setup-sub {
            font-size: .9rem;
            color: #6b7280;
            margin-bottom: 2rem;
        }
        .form-label {
            font-weight: 600;
            font-size: .875rem;
            color: #374151;
            margin-bottom: .35rem;
        }
        .form-control {
            border-radius: 8px;
            border: 1.5px solid #d1d5db;
            padding: .6rem .85rem;
            font-size: .9rem;
            transition: border-color .15s;
        }
        .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79,70,229,.12);
        }
        .btn-setup {
            background: #4f46e5;
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: .7rem 1.5rem;
            width: 100%;
            font-size: .95rem;
            transition: background .15s;
        }
        .btn-setup:hover { background: #4338ca; color: #fff; }
        .invalid-feedback { font-size: .8rem; }
        .divider {
            border-top: 1px solid #f3f4f6;
            margin: 1.75rem 0;
        }
        .warning-box {
            background: #fefce8;
            border: 1px solid #fde68a;
            border-radius: 8px;
            padding: .75rem 1rem;
            font-size: .82rem;
            color: #78350f;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="setup-card">
        <div class="text-center mb-3">
            <img src="{{ asset('front/assets/images/logo-dark.svg') }}" alt="AYENAH" height="40"
                 onerror="this.style.display='none'">
        </div>

        <span class="setup-badge">Configuration initiale</span>
        <h1 class="setup-title">Créer le super administrateur</h1>
        <p class="setup-sub">Cette page n'est accessible qu'une seule fois, avant tout compte admin.</p>

        <div class="warning-box">
            ⚠️ Une fois le compte créé, cette route sera automatiquement désactivée.
        </div>

        @if ($errors->any())
            <div class="alert alert-danger rounded-3 mb-3 py-2 px-3" style="font-size:.85rem;">
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('setup.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom complet</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                       class="form-control @error('name') is-invalid @enderror"
                       autocomplete="name" autofocus required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror"
                       autocomplete="email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input id="password" type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       autocomplete="new-password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                       class="form-control" autocomplete="new-password" required>
            </div>

            <button type="submit" class="btn btn-setup">
                Créer le compte administrateur
            </button>
        </form>
    </div>
</body>
</html>
