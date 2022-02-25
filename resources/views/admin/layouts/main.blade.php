<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  {{-- <link rel="shortcut icon" href="/img/epw-logo/logo-bg-blue.png" type="image/x-icon"> --}}
  <!-- Plugins -->
  <link href="/vendor/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  {{-- Data Tables --}}
  <link href="/vendor/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  {{-- Summernote --}}
  <link href="/vendor/summernote/summernote.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="/vendor/bootstrap5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/vendor/bootstrap5/dist/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="/css/admin/style.css" rel="stylesheet" />
  <link href="/css/admin/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!--Theme Styles-->
  <link href="/css/admin/dark-theme.css" rel="stylesheet" />
  <link href="/css/admin/light-theme.css" rel="stylesheet" />
  <link href="/css/admin/semi-dark.css" rel="stylesheet" />
  <link href="/css/admin/header-colors.css" rel="stylesheet" />

  {{-- Script --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  <title>{{ $title }} - Smart Hydroponic</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

    @include('admin.layouts.topbar')

    @include('admin.layouts.sidebar')

    <!--start content-->
    <main class="page-content">

      @yield('container')

    </main>
    <!--end page main-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    @include('admin.layouts.switcher')

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="/vendor/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="/vendor/metismenu/js/metisMenu.min.js"></script>
  <script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  {{-- Chartjs --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
  {{-- Apex Charts --}}
  <script src="/vendor/apexcharts-bundle/js/apexcharts.min.js"></script>
  {{-- Data Tables --}}
  <script src="/vendor/datatable/js/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="/js/table-datatable.js?modify={{ date('Ymd') }}"></script>
  {{-- Datepicker --}}
	<script src="/vendor/bootstrap-material-datetimepicker/js/moment.min.js"></script>
	<script src="/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
  {{-- Summernote --}}
  <script src="/vendor/summernote/summernote.min.js"></script>
  <!--app-->
  <script src="/js/app.js?modify={{ date('Ymd') }}"></script>
  <script src="/js/script.js?modify={{ date('Ymd') }}"></script>
  <script src="/js/notif.js?modify={{ date('Ymd') }}"></script>

</body>

</html>