<template>
<div class="content-wrapper pl-3 pr-3 pb-3 pt-3 mb-2" style="height: inherit; width:inherit;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>{{ $route.meta.title }}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">{{ $route.meta.title }}</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

    <!-- Main content -->
    <section class="content">

     <div class="row">
 <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box aor shadow-none">
      <span class="info-box-icon"><i class="fas fa-crosshairs"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Goals</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
    </div>
  </div>
 <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box aor shadow-none">
      <span class="info-box-icon"><i class="fas fa-tasks"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Tasks</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box aor shadow-none">
      <span class="info-box-icon"><i class="fas fa-calendar-check"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Accomplished</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
    </div>
  </div> -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box aor shadow-none">
      <span class="info-box-icon"><i class="fas fa-spinner"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Progress</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
    </div>
  </div>
</div>

<hr>
<br>

<div class="row">
  <div class="col-md-6 col-sm-6 col-12">
  <div class="info-box border-none shadow-none">
    <span class="info-box-icon aor"><i class="fas fa-thumbs-up"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Messages</span>
      <span class="info-box-number">1,410</span>
    </div>
  </div>
</div>
<div class="col-md-6 col-sm-6 col-12">
  <div class="info-box border-none shadow-none">
    <span class="info-box-icon aor">&nbsp;<i class="fas fa-medal"></i>&nbsp;</span>
    <div class="info-box-content">
      <span class="info-box-text">Messages</span>
      <span class="info-box-number">1,410</span>
    </div>
  </div>
</div>
</div>
 
<!-- bg-primary  bg-gradient-primary -->



        <div class="row justify-content-center shadow-none">
            <div class="col-md-12">
                <div class="card shadow-none">
                    <div class="card-header shadow-none">{{ $route.meta.title }}</div>

                   <div class="card-body shadow-none">

                        <h2>A vision board of sorts</h2>
                        <br>
                        Something to help you visualize your vision upon completion of each goal.
                        <br>
                        <h3>Coming Soon...</h3>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->


    <!-- Banner for Greydesk by greymore. DO NOT REMOVE UNDER ANY CIRCUMSTANCES -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center center-block">
        <div class="col-md-5 justify-content-center center-block">
        <img src="img/greydeskbanner.svg">
        </div>
    </div>
    <br>
    <br>
    <!-- END of Banner for Greydesk by greymore. DO NOT REMOVE UNDER ANY CIRCUMSTANCES -->


</div>
  <!-- /.content-wrapper -->

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
