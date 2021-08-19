<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ $title ? $title : 'Akademik SD'}}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  @if (isset($livewire))
    @livewireStyles
  @endif
  <link href=" {{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body class="" style="background-color: #f4f3ef;">
  <div class="wrapper ">
    <div class="sidebar" Data-color="white" Data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ $title == 'Home' ? 'active' : '' }}">
            <a href="{{ route('admin') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item dropdown" style="margin-left: 0px">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nc-icon nc-badge"></i>Kelola Data Pengguna
            </a>
            <div class="dropdown-menu" style="margin-left: 50px" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('dataGuru') }}">Data guru</a>
              <a class="dropdown-item" href="{{ route('dataSiswa') }}">Data siswa</a>
              <a class="dropdown-item" href="{{ route('dataAdmin') }}">Data admin/staff</a>
            </div>
          </li>
          <li class="{{ $title == 'Kelas' ? 'active' : '' }}">
            <a href="{{ route('kelas') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Kelola Kelas</p>
            </a>
          </li>
          {{-- <li class="">
            <div class="dropdown align-middle" style="margin-top: 10px; margin-left: 15px;margin-right: 15px;">
              <a class="dropdown-toggle align-middle text-center" style="padding-top: 10px;padding-bottom: 10px;padding-left: 8px;padding-right: 8px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-badge"></i>Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item ml-3" href="#"><i class="nc-icon nc-glasses-2"></i>Action</a>
                <a class="dropdown-item ml-3" href="#"><i class="nc-icon nc-glasses-2"></i>Another action</a>
                <a class="dropdown-item ml-3" href="#"><i class="nc-icon nc-glasses-2"></i>Something else here</a>
              </div>
            </div>
          </li> --}}
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100%">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent" style="height: 65px">
          <ul class="nav-menu">
              <li class="nav-item">
                  <a href="#" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">kelola Data siswa</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">kelola Data guru</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">kelola Data admin/staff</a>
              </li>
          </ul>
          <div class="hamburger">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')
      
    </div>
    
  </div>
  <!--   Core JS Files   -->
  @if (isset($livewire))
    @livewireScripts
  @endif
  <script src="{{ asset('css/main.js')}}"></script>
  <script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="{{ asset('') }} https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  {{-- <script src="{{ asset('/assets/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script> --}}
</body>

</html>
