<?php
    require_once '../model/registrationModel.php';

    $book_no = $_REQUEST['book_no'];
    $student_id = $_COOKIE['id'];

    $result = bookAdditionCheck($book_no, $student_id);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
?>