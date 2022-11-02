<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <link rel="icon" type="image/png" href="{{ asset('images/logo/favicon.png') }}"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
  <!-- Sweet Alert 2 -->
  <link rel="stylesheet" href="{{ asset('vendor/sweetAlert2/dist/sweetalert2.min.css') }}">

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <!-- Date Time Picker -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('admin::layouts.navbar')
    @include('admin::layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content_header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @yield('rates')
            @yield('search')
            @yield('content')
            @yield('search_rate')
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('vendor/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.js') }}"></script>
<!-- Sweet Alert 2-->
<script src="{{ asset('vendor/sweetAlert2/dist/sweetalert2.min.js') }}"></script>
<!-- Date Range Picker-->
<script src="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.ja.min.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('vendor/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- TOAST MESSAGE -->
@include('admin::common.sweetAlert')
@yield('script')
@include('admin::layouts.footer')
</div>
