<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="De-ba">

    <title>DE-BA - ADMIN</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('admin/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

    <!-- Data Tables -->
    <link href='{{asset('admin/assets/plugins/data-tables/datatables.bootstrap5.min.css')}}' rel='stylesheet'>
    <link href='{{asset('admin/assets/plugins/data-tables/responsive.datatables.min.css')}}' rel='stylesheet'>

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="{{asset('admin/assets/css/ekka.css')}}" />

    <!-- FAVICON -->
    <link href="{{asset('admin/assets/img/deba-logo.png') }}" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-header-light" id="body">

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->

        @include('admin.sidebar')

        <!-- PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            @include('admin.navbar')

            @yield('admin.content')



            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Copyright &copy; <span id="ec-year"></span><a class="text-primary"
                            href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin
                            Dashboard</a>. All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="{{asset('admin/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/tags-input/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/slick/slick.min.js')}}"></script>

    <!-- Data Tables -->
    <script src='{{asset('admin/assets/plugins/data-tables/jquery.datatables.min.js')}}'></script>
    <script src='{{asset('admin/assets/plugins/data-tables/datatables.bootstrap5.min.js')}}'></script>
    <script src='{{asset('admin/assets/plugins/data-tables/datatables.responsive.min.js')}}'></script>

    <!-- Option Switcher -->
    <script src="{{asset('admin/assets/plugins/options-sidebar/optionswitcher.js')}}"></script>

    <!-- Ekka Custom -->
    <script src="{{asset('admin/assets/js/ekka.js')}}"></script>
    @yield('modal')
    @yield('script')
</body>

</html>
