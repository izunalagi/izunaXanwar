<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @if (Request::segment(3) == 'cetak')
        <title>Invoice #{{ $details->id }}</title>
    @else
        <title>Dashboard Admin</title>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    @stack('css')
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Menetapkan navbar tetap di atas */
        .main-header.navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1050;
            /* pastikan lebih tinggi dari elemen lainnya */
        }

        /* Pastikan konten tidak tertutup oleh navbar */
        .content-wrapper {
            margin-top: 60px;
            /* Sesuaikan dengan tinggi navbar */
        }

        /* Pastikan elemen fullscreen tetap terlihat */
        .navbar-nav.ml-auto .nav-item .nav-link {
            position: relative;
            z-index: 1060;
            /* Memastikan tombol fullscreen ada di atas */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li> --}}
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('catalouge.index') }}" class="nav-link"> <i class="fas fa-home"> go to
                            catalouge</i> </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="#" class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>

                <!-- Form untuk Logout -->
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>
        </nav>
        <!-- /.navbar -->
        @include('dashboard.menu')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                @yield('judul')
                            </h1>
                        </div>

                    </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('isi')
                @yield('scripts')
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
    @stack('js')
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('/') }}dist/js/demo.js"></script> --}}
</body>

</html>
