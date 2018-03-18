<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kinerja Guru - @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/skins/skin-green-light.min.css') }}">
        <!-- TOast -->
        <link href="{{ url('assets/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet" type="text/css" />

        <!-- dropzone -->
        <link href="{{ url('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

          <!-- Select2 -->
  <link rel="stylesheet" href="{{ url('assets/bower_components/select2/dist/css/select2.min.css') }}">
        <!-- App css -->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/core.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/components.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/icons.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/pages.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/menu.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/plugins/switchery/switchery.min.css') }}">
        
        <!-- custom css -->

        <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
          <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/sweetalert.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script>
            var SITE_URL = "{{ url('/') }}";
        </script>
</head>
<body class="hold-transition skin-green-light sidebar-mini">
<div id="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    @include('layouts.topbar')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     @include('layouts.sidebar')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="footer text-right">
          2017 &copy; Kinerja Guru
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
        <script>
            var resizefunc = [];
        </script>
<!-- jQuery 3 -->
<script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ url('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Dropzone -->
<script src="{{ url('assets/plugins/dropzone/dropzone.min.js') }}"></script>
<!-- Jquery Validator -->
<script src="{{ url('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
 <script src="{{ url('assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('assets/js/detect.js') }}"></script>
        <script src="{{ url('assets/js/fastclick.js') }}"></script>
        <script src="{{ url('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ url('assets/js/waves.js') }}"></script>
        <script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ url('assets/plugins/switchery/switchery.min.js') }}"></script>
        <!-- Toast -->
        <script src="{{ url('assets/plugins/toast-master/js/jquery.toast.js') }}"></script>
        <!-- App js -->
        <script src="{{ url('assets/js/jquery.core.js') }}"></script>
        <script src="{{ url('assets/js/jquery.app.js') }}"></script>
        <!-- DataTables -->
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/sweetalert.js') }}"></script>
@include('sweet::alert')
     <!-- pages js -->
     @stack('js')
</body>
</html>