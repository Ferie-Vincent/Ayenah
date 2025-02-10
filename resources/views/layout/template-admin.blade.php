<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Ayenah - Utilisateur | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Project Ayenah, Projet Ayenah" name="description" />
    <meta content="Level-si" name="author" />

    <!-- App favicon -->
    <link rel="icon" href="{{ asset ('front/assets/images/favicon.svg ') }}" type="image/x-icon">

    <link href="{{ asset ('admin/assets/libs/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ asset ('admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link href="{{ asset ('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <link href="{{asset('admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset ('admin/assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset ('admin/assets/css/style.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ asset ('admin/assets/js/config.js')}}"></script>

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <div class="main-menu">

            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo' href="{{route('dashboard')}}">
                    <img src="{{asset('front/assets/images/logo.png')}}" alt="logo" class="logo-lg" height="22">
                    <img src="{{asset('front/assets/images/logo.png')}}" alt="logo" class="logo-lg" height="22">
                </a>
            </div>

            <!--- Menu -->
            <ul class="app-menu">

                <li class="menu-title">Menu</li>

                <li class="menu-item">
                    <a class='menu-link waves-effect' href="{{route('dashboard')}}">
                        <span class="menu-icon"><i class="bx bx-home"></i></span>
                        <span class="menu-text"> Tableau de bord</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class='menu-link waves-effect' href="{{route('visit')}}">
                        <span class="menu-icon"><i class="bx bx-car"></i></span>
                        <span class="menu-text"> Visite des lieux</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class='menu-link waves-effect' href="{{route('message')}}">
                        <span class="menu-icon"><i class="bx bx-message-rounded"></i></span>
                        <span class="menu-text"> Messages Reçus
                            @if($total_messages !== 0)
                                <sup><kbd class="bg-danger text-white rounded-circle">{{$total_messages}}</kbd></sup> 
                            @endif
                        </span>
                    </a>
                </li>


            </ul>
            <!--- End Menu -->
        </div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Dark -->
                            <a class='logo-dark' href="{{route('dashboard')}}">
                                <img src="{{asset('front/assets/images/logo.png')}}" alt="logo" class="logo-lg" height="40">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-4">

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                <span class="ms-1 d-none d-md-inline-block">
                                    {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenue !</h6>
                                </div>

                                <!-- item-->
                                <a href="{{route('profile.edit')}}" class="dropdown-item notify-item">
                                    <i data-lucide="user" class="font-size-16 me-2"></i>
                                    <span>Profil</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href="">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <i data-lucide="log-out" class="font-size-16 me-2"></i> {{ __('Déconnexion') }}
                                        </x-dropdown-link>
                                    </form>
                                    
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- Start Content-->
            @yield('content')

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © AYENAH
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://level-si.com" target="_blank">Level-si</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Toasts Bootstrap -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        @if(session('success'))
            <div class="toast show align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="toast show align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl, { delay: 5000 }); // Toast auto-fermant après 5 secondes
            });
            toastList.forEach(toast => toast.show());
        });
    </script>

    <!-- App js -->
    <script src="{{ asset ('admin/assets/js/vendor.min.js')}}"></script>
    <script src="{{ asset ('admin/assets/js/app.js')}}"></script>

    <script src="{{ asset ('admin/assets/libs/morris.js/morris.min.js')}}"></script>

    <script src="{{ asset ('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- third party js -->
    <script src="{{ asset ('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- Plugins Js -->
    <script src="{{ asset ('admin/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/jquery.quicksearch/jquery.quicksearch.min.html') }}"></script>
    <script src="{{ asset ('admin/assets/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

    <!-- Demo js -->
    <script src="{{ asset ('admin/assets/js/pages/form-advanced.js')}}"></script>
    <!-- third party js ends -->

    <!-- Datatables js -->
    <script src="{{ asset ('admin/assets/js/pages/datatables.js') }}"></script>
    <!-- Dashboard init-->
    <script src="{{ asset ('admin/assets/js/pages/dashboard.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{ asset ('admin/assets/libs/quill/quill.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset ('admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>

    <!-- Demo js-->
    <script src="{{ asset ('admin/assets/js/pages/form-fileuploads.js')}}"></script>

    <!-- Demo js-->
    <script src="{{ asset ('admin/assets/js/pages/form-quilljs.js') }}"></script>



</body>

</html>