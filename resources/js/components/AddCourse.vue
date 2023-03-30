<!-- <template>
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Course Name -
                <input type="text" class="modeltextinput" id="add_course_name" v-model="courseName" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add_course_btn" @click="AddCourse">Save changes</button>
            </div>
        </div>
    </div>
</template>


<script>
import axios from 'axios';

export default {
  data() {
    return {
      courseName: '',
    //   addCourseUrl: '{{ route('add_course') }}',
      addCourseUrl: "{{ route('add_course') }}",

    };
  },
  methods: {
    AddCourse() {
      axios.post(this.addCourseUrl, {
        _token: '{{ csrf_token() }}',
        course_name: this.courseName,
      })
      .then(response => {
        location.reload();
      })
      .catch(error => {
        alert('Error adding course!'+);

      });
    },
  },
};
</script> -->
