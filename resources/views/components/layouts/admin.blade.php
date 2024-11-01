<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $settings->favicon)}}"/>
    <title>
        {{ $title ?? "$settings->title Admin" }}
    </title>
    <!-- Custom CSS -->
    @vite(['public/back/css/style.min.css'])
    @yield('css')
</head>
<body class="skin-default-dark fixed-layout">
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('admin.index') }}" wire:navigate>
                    <!-- Logo icon -->
                    <b>
                        <!-- Light Logo icon -->
                        <img src="{{ asset('storage/' . $settings->logo)}}" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav me-auto">
                    <!-- This is  -->
                    <li class="nav-item">
                        <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                           href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                           href="javascript:void(0)"><i class="icon-menu"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <livewire:admin.layout.sidebar/>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            {{ $slot }}
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2024 @if(date('Y') > 2024)
            - {{ date('Y') }}
        @endif <a href="{{ route('home') }}">
            eTrade
        </a> by Jalil Abdullayev
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('back/node_modules/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('back/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('back/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('back/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('back/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{ asset('back/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{ asset('back/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('back/js/custom.min.js')}}"></script>
@yield('js')
</body>
</html>
