<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{trans('front/home.dir')}}" class="{{trans('front/home.class_dir')}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jozoor">
    <meta name="description" content="Joo - Niche Multi-Purpose HTML Template">
    <meta name="keywords" content="creative, niche, responsive, html5, css3, multipurpose, all in one, html, template">
    @include('endUser.layouts.head')
   </head>
<body class="{{trans('front/home.rtl')}} active-pageloader corporate logistics header-sticky hide-on-scroll header-menu-with-icons header-transparent header-menu-border-bottom header-topbar topbar-background dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
<div class="pageloader is-active"></div>
<div id="site-wrap" class="site">
<!-- Start Header --->
    @include('endUser.layouts.header')
<!-- End Header --->
@yield('content')
@include('endUser.layouts.footer')
</body>
</html>
