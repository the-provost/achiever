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

      <add-goal></add-goal>
      <add-task></add-task>

    <!-- Main content -->
    <section class="content justify-content-center align-center">


        <div class="row justify-content-center">
            <div class="col-md-12">


<!-- priority bars -->
                <br>
                <div class="row col-md-12" align="center">
                    <div class="col-md-12 row justify-content-center center-block" align="center">
                    <!-- <div class="col-md-12 d-flex"> -->
                        <div class="col-md-2 d-flex pt-2" style="display:block;"><h4>PRIORITY CHART</h4></div>
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

<div class="row justify-content-center center-block" align="center" style="width:100%;">
<div class="col-md-10 d-flex justify-content-center center-block" align="center">
    <div class="col-md-5 justify-content-center center-block pt-4 pb-0" align="center">
         <button type="button" class="btn btn-block aor btn-large" data-toggle="modal" data-target="#addGoalModal" style="width:70%;"><i class="fas fa-plus"></i> New Goal</button>
    </div>
    <br>
    <div class="col-md-5 justify-content-center center-block pt-4 pb-0" align="center">
        <button type="button" class="btn btn-block aor btn-large" data-toggle="modal" data-target="#addGoalModal" style="width:70%;"><i class="fas fa-search"></i> Filter 'em</button>
    </div>
</div>
<br>
</div>
<!-- /.button row -->

<br>
<br>
<br>


<!-- list items main -->
<div class="row justify-content-center center-block" v-for="goal in  goals" :key="goal.id">
    <div class="col-sm-10">


<!-- list item divs -->
<div class="card card-primary card-outline shadow-none">
     <div class="card-body">
       <div class="row">
         <div class="col-md-12">
           <h1 class="card-title">{{goal.title}}</h1>
           <p class="card-text">
             {{goal.description}}
           </p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
           <br>

         </div>      

         <div class="row" style="width:100%;">
           <div class="col-md-12 d-flex">
           <div class="col-md-2 d-flex">
             <div class="btn-group">
           <button type="button" class="btn aor" style="width:100%;">Tasks</button>
           <button type="button" class="btn aor" data-toggle="modal" data-target="#addTaskModal" style="width:100%; ">
           <i class="fas fa-plus"></i></button>
           <button type="button" class="btn aor" v-on:click="isHidden = !isHidden" style="width:100%; ">
           <i class="fas fa-list"></i></button>
           </div>
           </div>
           <br>
           <div class="col-md-2 d-flex ml-4">
             <button type="button" class="btn aor" data-toggle="modal" data-target="#addTaskModal" style="width:100%; ">
           <i class="far fa-edit"></i>&nbsp;Edit</button>
           </div>
           <br>
           <div class="col-md-1 d-flex">
           <div class="priority-unit d-flex pt-0 pl-4">
             <!-- justify-content-center center-block" align="center" style="width:100%;"> -->
           <div class="priority-circle justify-content-center center-block pt-1" align="center" :class="{pbar10: goal.priority == 10, pbar9: goal.priority == 9, pbar8: goal.priority == 8, pbar7: goal.priority == 7, pbar6: goal.priority == 6, pbar5: goal.priority == 5, pbar4: goal.priority == 4, pbar3: goal.priority == 3, pbar2: goal.priority == 2, pbar1: goal.priority == 1, pbar0: goal.priority == 0}" 
           style="height:30px; width:30px; border-radius:100%;">{{goal.priority}}</div>
           <!-- dynamic class association https://stackoverflow.com/questions/49346904/how-to-apply-dynamic-css-class-in-v-for-according-to-the-value-of-the-element  -->
           </div>
           </div>           
           <br>
           <div class="col-md-6 pt-2">
             <div class="progress progress-xss">
                  <div class="progress-bar progress-bar-striped" :class="{pbar10: goal.priority == 10, pbar9: goal.priority == 9, pbar8: goal.priority == 8, pbar7: goal.priority == 7, pbar6: goal.priority == 6, pbar5: goal.priority == 5, pbar4: goal.priority == 4, pbar3: goal.priority == 3, pbar2: goal.priority == 2, pbar1: goal.priority == 1, pbar0: goal.priority == 0}"
                  role="progressbar" v-bind:aria-valuenow="goal.percentage" aria-valuemin="0" aria-valuemax="100" :style="{ width: goal.percentage + '%' }">
                  <!-- :style="{ width: goal.percentage + '%' }"> -->
                    <span class="sr-only">{{goal.percentage}}% Complete (warning)</span>
                  </div>
                </div>
           </div>
           
         </div> 
         </div>
           
        </div>
      </div>
</div>

<!-- list item div ends -->

<!-- To use date filter {{goal.date | aDate}} -->

<!-- TASK list item divs -->
 <!-- v-if="!tasksHidden" -->
<div class="taskrow" v-for="task in  tasks" :key="task.id" :id=goal.id v-if="!isHidden">
  <div class="col-md-11 justify-content-center center-block">
    <div class="card card-warning card-outline-warning shadow-none" style="background-color: rgba(250, 218, 136, 0.34);">
      <div class="card-body">TASKS
       <div class="row"> 
         <div class="col-md-12">
           <h5 class="card-title">Card title</h5>
           <p class="card-text">
             Some quick example text to build on the card title and make up the bulk of the card's
             content.
           </p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
           <br>

         </div>      

         <div class="row" style="width:100%;">
           <div class="col-md-12 d-flex">
           <div class="col-md-2 d-flex">
             <div class="btn-group">
           <button type="button" class="btn pbar7" data-toggle="modal" data-target="#addTaskModal" style="width:100%; ">
           <i class="fas fa-edit"></i></button>
           <button type="button" class="btn pbar7" data-toggle="modal" data-target="#addTaskModal" style="width:100%; ">
           <i class="fas fa-trash"></i></button>
           <button type="button" class="btn pbar7" data-toggle="modal" data-target="#addTaskModal" style="width:100%; ">
           <i class="fas fa-exchange-alt"></i></button>
           </div>
           </div>
           
           <br>
           <div class="col-md-4 d-flex">
           <div class="priority-unit d-flex pt-0 pl-4">
           <div class="priority-circle pbar10" style="height:30px; width:30px; border-radius:100%;"></div>
           </div>
           </div>           
           <br>
           <div class="col-md-6 pt-2">
             <div class="progress progress-xss">
                  <div class="progress-bar pbar7 progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
           </div>
           
         </div> 
         </div>
           
        </div>
      </div>
    </div>
  </div>
</div>
  


<!-- TASK list item div ends -->



<br>

 </div>
</div>
<!-- list items main end-->




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
        <div class="col-md-6 justify-content-center center-block">
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
        data (){
            return{
              goals: {}, 
              // goals object so curly brackets
              tasks: {}, 
              // tasks object so curly brackets
              //tasksHidden: true,
              // to hide tasks
              addGoalForm: new Form({
                    title:'',
                    description:'',
                    plannedstart:'',
                    plannedend:'',
                    term:'',
                    priority:''
                }),
                addTaskForm: new Form({
                    title:'',
                    description:'',
                    plannedstart:'',
                    plannedend:'',
                    term:'',
                    priority:''
                }),
                isHidden: true
            }
        },
        methods: {
          loadGoals(){
            axios.get("goal").then(({data}) => (this.goals = data));
            // funtion ({data}) that stores the axios data into a goals object here 
          },
          createGoal(){
            this.$Progress.start();
            this.addGoalForm.post('goal');
             
            this.$Progress.finish();
          },
          loadTasks(){
            axios.get("task").then(({data}) => (this.tasks = data));
            // funtion ({data}) that stores the axios data into a taskss object here 
          },
          createTasks(){
            this.addTaskForm.post('task');
          }
        },
        mounted() {
            this.loadGoals();
            // calling the method to load all goals from table
            console.log('Loading Goals...');
            this.loadTasks();
            // calling the method to load all tasks from table
            console.log('Loading Tasks...');
        }
    }
</script>
