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


        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Move it around. See where you stand.</div>

                   <div class="card-body">
                       <kanban-board :stages="stages" :blocks="blocks" @update-block="updateBlock">
  <div v-for="stage in stages" :slot="stage" :key="stage">
    <h2>{{ stage }}</h2>
  </div>
  <div v-for="block in blocks" :slot="block.id" :key="block.id">
    <div>
      <strong>id:</strong> {{ block.id }}
    </div>
    <div>
      {{ block.title }}
    </div>
  </div>
</kanban-board>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

</template>

<script>
    export default {
        data(){
            return{
            stages: ['bucket-list', 'in-progress', 'achieved', 'side-tracked'],
            blocks: [
                {
                 id: 1,
                 status: 'bucket-list',
                 title: 'Test',
                 },
                     ],
                   }
                },
        methods:{
            mounted() {
            console.log('Displaying Kanban Board')
            }
                }

    }
</script>

