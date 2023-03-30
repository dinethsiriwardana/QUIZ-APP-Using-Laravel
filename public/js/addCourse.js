function addCourse() {
    var courseName = "Text Course"; // get the course name value

    // var courseName = $('#add_course_name').val(); // get the course name value
    $.ajax({
        url: addCourseUrl, // the server endpoint for adding a new course
        type: "POST",
        data: {
            _token: csrfToken,
            course_name: courseName
        },
        success: function(data) {
            // refresh the page to see the new course in the table
            location.reload();
        },
        error: function(xhr) {
            // handle errors
            alert('Error adding course!');
        }
    });
}
