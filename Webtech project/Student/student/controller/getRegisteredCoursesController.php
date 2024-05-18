<?php
    include_once '../model/DatabaseConnection.php';
    
    function getRegisteredCoursesController() {
        $student_id = $_COOKIE['id'];

        $result = getRegisteredCourses($student_id);

        return $result;
    }
?>