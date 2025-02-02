<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selaras | {{ (!empty($title)) ? $title : '' }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/Brand-Selaras.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
  <style>
    .active {
      border-radius: 20%;
      background-color: #000 !important;
    }

    .sidebar-nav ul .sidebar-item.selected>.sidebar-link, .sidebar-nav ul .sidebar-item.selected>.sidebar-link.active, .sidebar-nav ul .sidebar-item>.sidebar-link.active {
    background-color: #000 !important;
    color: #fff;
}

    .bg-primary{
      background-color: #000 !important;
    }
    
    .active:active, .active:focus, .active:visited {
      border-radius: 20%;
      background-color: #000 !important;
    }

    .btn-primary {
      background-color: #000 !important;
      border-color: #000 !important;
    }
    
    .btn-primary {
      background-color: #000 !important;
      border-color: #000 !important;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('layouts.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('layouts.header')
      <!--  Header End -->
      <div class="container-fluid">
        {{-- Content Start --}}
        @yield('content')
        {{-- Content End --}}

        {{-- Footer Start --}}
        @include('layouts.footer')
        {{-- Footer End --}}
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>