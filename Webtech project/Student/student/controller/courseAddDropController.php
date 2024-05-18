<?php
    require_once '../model/registrationModel.php';

    $course_id = $_REQUEST['course_id'];
    // $student_id = $_REQUEST['student_id'];
    $student_id = $_COOKIE['id'];

    $result = courseAddDrop($course_id, $student_id);

    echo $result;
?>