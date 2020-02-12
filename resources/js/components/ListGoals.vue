<template>
<div class="content-wrapper pl-3 pr-3 pb-3 pt-3 mb-2" style="height: inherit; width:inherit;">
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


        <div class="row justify-content-center">
            <div class="col-md-12">



<!-- priority bars -->
                <br>
                <div class="row col-md-12" align="center">
                    <div class="col-md-12 row justify-content-center center-block" align="center">
                    <!-- <div class="col-md-12 d-flex"> -->
                        <div class="col-md-2 d-flex pt-2" style="display:block;"><h4>PRIORITY  &nbsp  CHART</h4></div>
                        <div class="pbar1 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">1</div>
                        <div class="pbar2 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">2</div>
                        <div class="pbar3 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">3</div>
                        <div class="pbar4 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">4</div>
                        <div class="pbar5 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">5</div>
                        <div class="pbar6 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">6</div>
                        <div class="pbar7 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">7</div>
                        <div class="pbar8 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">8</div>
                        <div class="pbar9 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">9</div>
                        <div class="pbar10 col-md-1 d-flex justify-content-center pt-2 center-block" style="display:block;">10</div>
                    <!-- </div> -->
                    </div>
                </div>
                <br>
<!-- priority bars end -->





     </div>
        </div>


    </section>
    <!-- /.content -->
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
