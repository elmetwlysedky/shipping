<!DOCTYPE html>
<html lang ="ar">

<head>
    <!-- Page Title -->
    <title>Dashmin - Multipurpose Bootstrap Dashboard Template</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('Dashboard.Layouts.head')
    @yield('css')

</head>

<body>

<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">

            <!-- Header -->
        @include('Dashboard.Layouts.main-header')
        <!-- End Header -->

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
        <!-- Sidebar -->
        @include('Dashboard.Layouts.main-sidebar')
        <!-- End Sidebar -->
        @yield('content')

    </div>
    <!-- End Main Wrapper -->

 @include('Dashboard.Layouts.footer')
    </div>


@include('Dashboard.Layouts.footerjs')

</body>

</html>
