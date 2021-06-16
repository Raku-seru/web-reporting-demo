<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Template style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <!-- Additional style -->
    @yield('styles')

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Template Core -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">

</head>
<body class="layout-navbar-fixed layout-fixed hold-transition sidebar-mini" style="height: auto;background-color: #f4f6f9">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
            <img src="{{asset('dist/img/logo.jpg')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Company</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <i class="pt-2 pl-2 fas fa-user" style="color: #b8b8b8"></i>
                    <!-- <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> -->
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
          </div>
            <!-- Sidebar Menu -->
            @include('partials.sidebar')
            <!-- /.sidebar-menu -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @yield('header')
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section><!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                {{-- <div class="container-fluid"> --}}
                    @yield('content')
                {{-- </div><!-- /.container-fluid --> --}}
            </section><!-- /.content -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer text-sm">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.2
            </div>
            <strong> Made by <a href="https://github.com/Raku-Seru">Raku-Seru</a></strong> - 2021.
        </footer>
    </div><!-- ./wrapper -->
    
    <!-- Additional script -->
    @stack('script')

</body>
</html>