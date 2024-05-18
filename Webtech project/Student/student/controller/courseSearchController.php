<?php
    include_once '../model/DatabaseConnection.php';
    
    $course = $_REQUEST['course'];

    $result = searchCourse($course);

    echo $result;
?>