<template>
<!-- Modal -->
<div class="modal fade" id="addGoalModal" tabindex="-1" role="dialog" aria-labelledby="addGoalModalModalLabel" aria-hidden="true">
       <!-- Form -->
  <form @submit.prevent="createGoal">
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
                        <input v-model="form.title" type="text" name="title" class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                        <has-error :form="form" field="title"></has-error>
                   </div>

                    <div class="form-group">
                        <label>A little note</label>
                        <input v-model="form.description" type="text" name="description" class="form-control" :class="{ 'is-invalid': form.errors.has('description') }">
                        <has-error :form="form" field="description"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Start Date (Not necessary)</label>
                        <input v-model="form.plannedstart" type="date" name="startDate" class="form-control" :class="{ 'is-invalid': form.errors.has('plannedststart') }">
                        <has-error :form="form" field="plannedstart"></has-error>
                   </div>

                    <div class="form-group">
                        <label>End Date (Not necessary)</label>
                        <input v-model="form.plannedend" type="date" name="endDate" class="form-control" :class="{ 'is-invalid': form.errors.has('plannedend') }">
                        <has-error :form="form" field="plannedend"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Priority (Low ➡ High)</label>
                        <input v-model="form.priority" type="range" name="inputPriority" class="form-control custom-range custom-range-warning form-control" min="0" max="10" id="priority" oninput="outputPriority.value = inputPriority.value" :class="{ 'is-invalid': form.errors.has('priority') }">
                        <span class="badge badge-warning"><output name="outputPriority" id="outputPriority"></output></span>
                        <has-error :form="form" field="priority"></has-error>
                   </div>

                    <div class="form-group">
                        <label>Term</label>
                        <input v-model="form.term" type="text" name="term" class="form-control" :class="{ 'is-invalid': form.errors.has('term') }">
                        <has-error :form="form" field="term"></has-error>
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
                form: new Form({
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
            this.form.post('api/goal');
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

