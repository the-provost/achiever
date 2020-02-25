<template>
<!-- Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalModalLabel" aria-hidden="true">
       <!-- Form -->
  <form @submit.prevent="createTask">
    @csrf
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTaskModalLabel">Add a Task to this Goal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
           
                <div class="card-body">
                    <div class="form-group">
                        <label>Task</label>
                        <input v-model="addTaskForm.title" type="text" name="title" class="form-control" :class="{ 'is-invalid': addTaskForm.errors.has('title') }">
                        <has-error :form="addTaskForm" field="title"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Task Description</label>
                        <input v-model="addTaskForm.description" type="text" name="description" class="form-control" :class="{ 'is-invalid': addTaskForm.errors.has('description') }">
                        <has-error :form="addTaskForm" field="description"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Start Date (Not necessary)</label>
                        <input v-model="addTaskForm.plannedstart" type="date" name="startDate" class="form-control" :class="{ 'is-invalid': addTaskForm.errors.has('plannedststart') }">
                        <has-error :form="addTaskForm" field="plannedstart"></has-error>
                   </div>

                    <div class="form-group">
                        <label>End Date (Not necessary)</label>
                        <input v-model="addTaskForm.plannedend" type="date" name="endDate" class="form-control" :class="{ 'is-invalid': addTaskForm.errors.has('plannedend') }">
                        <has-error :form="addTaskForm" field="plannedend"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Priority (Low ➡ High)</label>
                        <input v-model="addTaskForm.priority" type="range" name="inputPriority" class="form-control custom-range custom-range-warning form-control" min="0" max="10" id="priority" oninput="outputPriority.value = inputPriority.value" :class="{ 'is-invalid': addTaskForm.errors.has('priority') }">
                        <span class="badge badge-warning"><output name="outputPriority" id="outputPriority"></output></span>
                        <has-error :form="addTaskForm" field="priority"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Term</label>
                        <input v-model="addTaskForm.term" type="text" name="term" class="form-control" :class="{ 'is-invalid': addTaskForm.errors.has('term') }">
                        <has-error :form="addTaskForm" field="term"></has-error>
                   </div>

                </div>
                <!-- /.card-body -->
              
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </form>
                <!-- Form Ends -->
</div>

</template>

<script>
     export default {
        data (){
            return{
                addTaskForm: new Form({
                    title:'',
                    description:'',
                    plannedstart:'',
                    plannedend:'',
                    term:'',
                    priority:''
                })
            }
        },
        methods: {
          createTask(){
            this.addTaskForm.post('task');
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

