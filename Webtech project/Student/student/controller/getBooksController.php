<?php
    include_once '../model/DatabaseConnection.php';
    
    function getBooks() {
        $student_id = $_COOKIE['id'];

        $result = addBooks($student_id);

        return $result;
    }
?>