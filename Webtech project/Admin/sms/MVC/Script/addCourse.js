function validation() {
    var courseId = document.getElementById("courseId").value;
    var courseName = document.getElementById("courseName").value;
    var courseDescription = document.getElementById("courseDescription").value;
    var courseCredits = document.getElementById("courseCredits").value;
    var error_message = document.getElementById("error_message");
    var text;

    if (courseId == "" || courseName == "" || courseDescription == "" || courseCredits == "") {
        text = "Please fill all the fields.";
        error_message.innerHTML = text;
        return false;
    } else {
        if (isNaN(courseId)) {
            text = "Course ID must be a number.";
            error_message.innerHTML = text;
            return false;
        }
        if (courseId.length != 4) {
            text = "Course ID must be 4 digits long.";
            error_message.innerHTML = text;
            return false;
        }

        if (isNaN(courseCredits)) {
            text = "Course credits must be a number.";
            error_message.innerHTML = text;
            return false;
        }
        if (courseCredits <= 0) {
            text = "Course credits must be greater than zero.";
            error_message.innerHTML = text;
            return false;
        }

        if (courseName.length < 3) {
            text = "Course name is too short.";
            error_message.innerHTML = text;
            return false;
        }

  

        return true;
    }
}
