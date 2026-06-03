<!-- Sidebar Brand -->
<div class="sidenav-brand">
    <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
        <img src="{{ asset('admin/assets/images/logo.png') }}" alt="AYENAH" style="height: 34px;">
        <span class="brand-text">AYENAH</span>
    </a>
</div>

<!-- Sidebar User -->
<div class="sidenav-user">
    <a href="{{ route('profile.edit') }}" class="sidenav-user-info">
        <div class="avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
        <span>
            <h6>{{ Auth::user()->name }}</h6>
            <small>Administrateur</small>
        </span>
    </a>
</div>

<!-- Sidebar Menu -->
<ul class="side-nav">

    <!-- PRINCIPAL -->
    <li class="menu-title">PRINCIPAL</li>

    <li class="side-nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="layout-dashboard"></i></span>
            <span class="menu-text">Tableau de bord</span>
        </a>
    </li>

    <!-- GESTION -->
    <li class="menu-title">GESTION</li>

    <li class="side-nav-item {{ request()->routeIs('admin.projets.*') ? 'active' : '' }}">
        <a href="{{ route('admin.projets.index') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="folder-open"></i></span>
            <span class="menu-text">Projets</span>
        </a>
    </li>

    <li class="side-nav-item {{ request()->routeIs('admin.enregistrements.*') ? 'active' : '' }}">
        <a href="{{ route('admin.enregistrements.index') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="users"></i></span>
            <span class="menu-text">Candidatures</span>
            @php $pending = \App\Models\Enregistrement::whereNull('validated_at')->count(); @endphp
            @if($pending > 0)
                <span class="badge bg-warning text-dark ms-auto" style="font-size:10px;">{{ $pending }}</span>
            @endif
        </a>
    </li>

    <li class="side-nav-item {{ request()->routeIs('visit') ? 'active' : '' }}">
        <a href="{{ route('visit') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="newspaper"></i></span>
            <span class="menu-text">Actualités</span>
        </a>
    </li>

    <li class="side-nav-item {{ request()->routeIs('message') ? 'active' : '' }}">
        <a href="{{ route('message') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="mail"></i></span>
            <span class="menu-text">Messages</span>
            @if(isset($total_messages) && $total_messages > 0)
                <span class="badge bg-danger">{{ $total_messages }}</span>
            @endif
        </a>
    </li>

    <!-- CONTENU -->
    <li class="menu-title">CONTENU</li>

    <li class="side-nav-item {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
        <a href="{{ route('admin.pages.index') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="file-text"></i></span>
            <span class="menu-text">Pages du site</span>
        </a>
    </li>

    <li class="side-nav-item {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">
        <a href="{{ route('admin.faqs.index') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="help-circle"></i></span>
            <span class="menu-text">FAQ</span>
        </a>
    </li>

    <li class="side-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
        <a href="{{ route('admin.settings.index') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="settings"></i></span>
            <span class="menu-text">Paramètres</span>
        </a>
    </li>

    <li class="side-nav-item {{ request()->routeIs('admin.activity-log') ? 'active' : '' }}">
        <a href="{{ route('admin.activity-log') }}" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="scroll-text"></i></span>
            <span class="menu-text">Journal d'activité</span>
        </a>
    </li>

    <!-- LIENS -->
    <li class="menu-title">LIENS</li>

    <li class="side-nav-item">
        <a href="https://tawk.to/" target="_blank" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="message-circle"></i></span>
            <span class="menu-text">Chatbox</span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="https://analytics.google.com/" target="_blank" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="bar-chart-3"></i></span>
            <span class="menu-text">Statistiques</span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="{{ route('home') }}" target="_blank" class="side-nav-link">
            <span class="menu-icon"><i data-lucide="external-link"></i></span>
            <span class="menu-text">Voir le site</span>
        </a>
    </li>
</ul>
