<?php
    require_once '../model/registrationModel.php';

    $course_id = $_REQUEST['course_id'];
    $student_id = $_COOKIE['id'];

    $result = courseRegistrationCheck($course_id, $student_id);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
?>