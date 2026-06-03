<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-sidenav-color="dark" data-bs-theme="light" data-topbar-color="light" data-layout-position="fixed" data-sidenav-size="default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AYENAH') — Administration</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front/assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">

    <!-- Summernote (éditeur riche) -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Admin Custom CSS -->
    <link href="{{ asset('admin/assets/css/admin-custom.css') }}?v={{ filemtime(public_path('admin/assets/css/admin-custom.css')) }}" rel="stylesheet">

    <!-- Table overrides — box-shadow kill + collapse -->
    <style>
        table.dataTable { border-collapse: collapse !important; border-spacing: 0 !important; }
        table.dataTable thead th { background: #f1f5f9 !important; color: #475569 !important; border-bottom: 2px solid #cbd5e1 !important; border-top: none !important; font-size: 10.5px !important; font-weight: 700 !important; text-transform: uppercase !important; letter-spacing: .06em !important; padding: 10px 14px !important; box-shadow: none !important; }
        table.dataTable tbody td { padding: 10px 14px !important; vertical-align: middle !important; border-top: none !important; border-bottom: 1px solid #e2e8f0 !important; font-size: 13px !important; box-shadow: none !important; --bs-table-accent-bg: transparent !important; }
        table.dataTable tbody tr:last-child td { border-bottom: none !important; }
        table.dataTable tbody tr:hover td { background-color: #f0fdf4 !important; box-shadow: none !important; }
    </style>

    @stack('styles')
</head>

<body>

    <div class="wrapper">

        <!-- ========== Topbar ========== -->
        <header class="app-topbar">
            <div class="topbar-inner">
                <div class="d-flex align-items-center gap-3">
                    <!-- Sidebar Toggle -->
                    <button type="button" class="btn btn-link p-0 text-dark" id="btn-toggle-sidebar" aria-label="Ouvrir/Fermer le menu">
                        <i data-lucide="menu" style="width:24px;height:24px;" aria-hidden="true"></i>
                    </button>

                    <!-- Page Title -->
                    <h5 class="mb-0 d-none d-md-block">@yield('page-title', 'Administration')</h5>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <!-- User Dropdown -->
                    <div class="dropdown">
                        <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar-sm me-2">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                            <span class="d-none d-md-inline fw-medium">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Bienvenue !</h6></li>
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i data-lucide="user" class="me-2" style="width:16px;height:16px;"></i>Profil</a></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}" target="_blank"><i data-lucide="external-link" class="me-2" style="width:16px;height:16px;"></i>Voir le site</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i data-lucide="log-out" class="me-2" style="width:16px;height:16px;"></i>Déconnexion
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== End Topbar ========== -->

        <!-- ========== Sidebar ========== -->
        <div class="sidenav-menu">
            @include('layout.partials.admin-sidebar')
        </div>
        <div class="sidebar-overlay"></div>
        <!-- ========== End Sidebar ========== -->

        <!-- ========== Content ========== -->
        <div class="content-page">
            <div class="container-fluid">

                <!-- Breadcrumb -->
                @yield('breadcrumb')

                <!-- Page Content -->
                @yield('content')

            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            {{ date('Y') }} &copy; AYENAH
                        </div>
                        <div class="col-md-6 text-end d-none d-md-block">
                            Design & Develop by <a href="https://level-si.com" target="_blank">Level-si</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- ========== End Content ========== -->

    </div>

    <!-- Toast Notifications -->
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index:9999;" role="region" aria-live="polite" aria-label="Notifications">
        @if(session('success'))
            <div class="toast show align-items-center text-bg-success border-0" role="alert" data-autohide="true">
                <div class="d-flex">
                    <div class="toast-body">{{ session('success') }}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="toast show align-items-center text-bg-danger border-0" role="alert" data-autohide="true">
                <div class="d-flex">
                    <div class="toast-body">{{ session('error') }}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="toast show align-items-center text-bg-warning border-0" role="alert" data-autohide="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <ul class="mb-0 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        @endif
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@0.344.0"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/lang/summernote-fr-FR.min.js"></script>

    <!-- Admin Custom JS -->
    <script src="{{ asset('admin/assets/js/admin.js') }}"></script>

    <!-- DataTables Init -->
    <script>
        function applyTableStyles(tableNode) {
            // Force styles directly on DOM after DataTables render
            $(tableNode).find('thead th').each(function() {
                this.style.setProperty('background', '#f1f5f9', 'important');
                this.style.setProperty('color', '#475569', 'important');
                this.style.setProperty('border-bottom', '2px solid #cbd5e1', 'important');
                this.style.setProperty('border-top', 'none', 'important');
                this.style.setProperty('font-size', '10.5px', 'important');
                this.style.setProperty('font-weight', '700', 'important');
                this.style.setProperty('text-transform', 'uppercase', 'important');
                this.style.setProperty('letter-spacing', '.06em', 'important');
                this.style.setProperty('padding', '10px 14px', 'important');
                this.style.setProperty('box-shadow', 'none', 'important');
            });
            $(tableNode).find('tbody tr').each(function(i) {
                var bg = (i % 2 === 0) ? '#f8fafc' : '#ffffff';
                $(this).find('td').each(function() {
                    this.style.setProperty('padding', '9px 14px', 'important');
                    this.style.setProperty('border-bottom', '1px solid #e2e8f0', 'important');
                    this.style.setProperty('border-top', 'none', 'important');
                    this.style.setProperty('vertical-align', 'middle', 'important');
                    this.style.setProperty('font-size', '13px', 'important');
                    this.style.setProperty('box-shadow', 'none', 'important');
                    this.style.setProperty('background-color', bg, 'important');
                });
            });
            // Remove border from last row
            $(tableNode).find('tbody tr:last-child td').each(function() {
                this.style.setProperty('border-bottom', 'none', 'important');
            });
        }

        $(document).ready(function() {
            var dtConfig = {
                responsive: true,
                dom: '<"d-flex justify-content-between align-items-center mb-3"<"d-flex align-items-center"lB>f>rtip',
                buttons: [
                    { extend: 'csv', className: 'btn btn-sm btn-outline-secondary' },
                    { extend: 'excel', className: 'btn btn-sm btn-outline-secondary' },
                    { extend: 'print', className: 'btn btn-sm btn-outline-secondary' }
                ],
                language: {
                    search: "Rechercher :",
                    lengthMenu: "Afficher _MENU_ entrées",
                    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                    infoEmpty: "Aucune entrée",
                    infoFiltered: "(filtré de _MAX_ entrées)",
                    zeroRecords: "Aucun résultat trouvé",
                    paginate: { previous: "Précédent", next: "Suivant" }
                },
                drawCallback: function() {
                    applyTableStyles(this.api().table().node());
                }
            };

            $('table[id^="dt-"]').each(function() {
                if (!$.fn.DataTable.isDataTable(this)) {
                    var dt = $(this).DataTable(dtConfig);
                    applyTableStyles(this);
                }
            });

            // Hover via event delegation — CSS !important still handles it
            $(document).on('mouseenter', 'table.dataTable tbody tr', function() {
                $(this).find('td').each(function() {
                    this.style.setProperty('background-color', '#f0fdf4', 'important');
                });
            }).on('mouseleave', 'table.dataTable tbody tr', function() {
                var i = $(this).index();
                var bg = (i % 2 === 0) ? '#f8fafc' : '#ffffff';
                $(this).find('td').each(function() {
                    this.style.setProperty('background-color', bg, 'important');
                });
            });
        });
    </script>

    @stack('scripts')

</body>
</html>
