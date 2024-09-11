<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Khatoun || @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('assets/1images/logos/seodashlogo.png') }}"/>
  <link rel="stylesheet" href="{{asset('assets1/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('admin.layouts.sidebar1')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        @include("admin.layouts.header1")
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="{{ asset('assets1/libs/jquery/dist/jquery.min.js') }} "></script>
  <script src="{{ asset('assets1/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('assets1/libs/apexcharts/dist/apexcharts.min.js') }} " ></script>
  <script src="{{ asset('assets1/libs/simplebar/dist/simplebar.js') }} "></script>
  <script src="{{ asset('assets1/js/sidebarmenu.js') }} "></script>
  <script src="{{ asset('assets1/js/app.min.js') }} "></script>
  <script src="{{ asset('assets1/js/dashboard.js') }} "></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>