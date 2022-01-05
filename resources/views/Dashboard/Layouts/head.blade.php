<title>@yield('title')</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('Dashboard/img/favicon.png')}}">
<!-- Web Fonts -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

<!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
<link rel="stylesheet" href="{{asset('Dashboard/plugins/apex/apexcharts.css')}}">
<link rel="stylesheet" href="/dashboard/fonts/elegant_icons/elegant-icons.css">
<!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

<!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
<link rel="stylesheet" href="{{asset('Dashboard/fonts/icofont/icofont.min.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/plugins/form-wizaed/wizard.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/fonts/fontawsome/font-awsome.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/bootstrap/css/bootstrap.min.css')}}">


{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ5mBAaaij69pG1mWGzMwA1FJuHLW05E4&libraries=places&callback=initAutocomplete" async defer></script>--}}
{{--<script src="{{URL::asset('Dashboard/js/mapInput.js')}}"></script>--}}
{{--<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css.css')}}">--}}

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ5mBAaaij69pG1mWGzMwA1FJuHLW05E4&libraries=places&callback=initAutocomplete" async defer></script>
<script src="{{URL::asset('Dashboard/js/mapInput.js')}}"></script>

<link rel="stylesheet" href="{{asset('css/app.css')}}">



<!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

@if(App::getLocale() =='ar')
   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="{{asset('Dashboard/ar/css/style.css')}}">
   <!-- ======= END MAIN STYLES ======= -->
@else
   <link rel="stylesheet" href="{{asset('Dashboard/en/css/style.css')}}">
@endif

@yield('css')
