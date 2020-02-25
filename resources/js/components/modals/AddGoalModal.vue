<template>
<!-- Modal -->
<div class="modal fade" id="addGoalModal" tabindex="-1" role="dialog" aria-labelledby="addGoalModalModalLabel" aria-hidden="true">
       <!-- Form -->
  <form @submit.prevent="createGoal">
    @csrf
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addGoalModalLabel">Add a new goal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
           
                <div class="card-body">
                    <div class="form-group">
                        <label>Goal</label>
                        <input v-model="addGoalForm.title" type="text" name="title" class="form-control" :class="{ 'is-invalid': addGoalForm.errors.has('title') }">
                        <has-error :form="addGoalForm" field="title"></has-error>
                   </div>

                    <div class="form-group">
                        <label>A little note</label>
                        <input v-model="addGoalForm.description" type="text" name="description" class="form-control" :class="{ 'is-invalid': addGoalForm.errors.has('description') }">
                        <has-error :form="addGoalForm" field="description"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Start Date (Not necessary)</label>
                        <input v-model="addGoalForm.plannedstart" type="date" name="startDate" class="form-control" :class="{ 'is-invalid': addGoalForm.errors.has('plannedststart') }">
                        <has-error :form="addGoalForm" field="plannedstart"></has-error>
                   </div>

                    <div class="form-group">
                        <label>End Date (Not necessary)</label>
                        <input v-model="addGoalForm.plannedend" type="date" name="endDate" class="form-control" :class="{ 'is-invalid': addGoalForm.errors.has('plannedend') }">
                        <has-error :form="addGoalForm" field="plannedend"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Priority (Low ➡ High)</label>
                        <input v-model="addGoalForm.priority" type="range" name="inputPriority" class="form-control custom-range custom-range-warning form-control" min="0" max="10" id="priority" oninput="outputPriority.value = inputPriority.value" :class="{ 'is-invalid': addGoalForm.errors.has('priority') }">
                        <span class="badge badge-warning"><output name="outputPriority" id="outputPriority"></output></span>
                        <has-error :form="addGoalForm" field="priority"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Term</label>
                        <input v-model="addGoalForm.term" type="text" name="term" class="form-control" :class="{ 'is-invalid': addGoalForm.errors.has('term') }">
                        <has-error :form="addGoalForm" field="term"></has-error>
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
                addGoalForm: new Form({
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
          createGoal(){
            this.addGoalForm.post('goal');
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

