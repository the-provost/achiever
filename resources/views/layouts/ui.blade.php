
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Achiever | An aid for the goal-oriented</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition layout-fixed layout-footer-fixed sidebar-mini layout-navbar-fixed sidebar-collapse shadow-none">
<!-- Site wrapper  layout-footer-fixed -->
<div class="wrapper" id="app">

    <!-- Navbar -->
  @include( 'layouts.navbar' )
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4 shadow-none border-none"> {{-- sidebar-no-expand --}}
    <!-- Brand Logo -->
    <a href="/home" class="brand-link bg-white">
      <img src="img/achieverlogo.svg"
           alt="Achiever"
           class="brand-image"
           style="opacity: 1">
      <span class="brand-text font-weight-light">A C H I E V E R</span>
    </a>

<!-- Sidebar -->
  @include( 'layouts.sidebar' )
<!-- /.sidebar -->

</aside>

  <!-- Content Wrapper. Contains page content -->

<vue-progress-bar></vue-progress-bar>

    <router-view>
            {{-- vue components here --}}
    </router-view>

<!-- /.content-wrapper -->



  <footer class="main-footer border-none shadow-none">
    <div class="float-right d-none d-sm-block border-none shadow-none">
      <b>Achiever</b>  Version 1.0
    </div>
    For the ❤ of open-source, from <strong><a href="http://greymore.tech" target="_blank">Greymore Tech</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
     {{-- achievements in control sidebar here --}}
     @include( 'layouts.controlsidebar' )
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@auth
<script>
    window.user = @json(auth()->user()) ;
</script>
@endauth


{{-- app.js  add all js there --}}
<script src="/js/app.js"></script>
</body>

</html>
