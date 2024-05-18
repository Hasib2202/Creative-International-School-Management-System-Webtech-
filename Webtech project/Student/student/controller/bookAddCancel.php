<?php
    require_once '../model/registrationModel.php';

    $book_no = $_REQUEST['book_no'];
    // $student_id = $_REQUEST['student_id'];
    $student_id = $_COOKIE['id'];

    $result = bookAddCancel($book_no, $student_id);

    echo $result;
?>