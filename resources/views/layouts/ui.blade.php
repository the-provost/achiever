
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Achiever | An aid for the goal oriented</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper" id="app">

    <!-- Navbar -->
  @include( 'layouts.navbar' )
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-indigo elevation-4 ">
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
<vue-progress-bar>
    {{-- vue progress bar --}}
</vue-progress-bar>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <router-view>
        {{-- vue components here --}}
    </router-view>

</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Achiever</b>  Version 1.0
    </div>
    <strong>&copy; 2020 <a href="http://greymore.tech">Greymore Tech</a>.</strong> Open-Sourced under Licence.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
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
