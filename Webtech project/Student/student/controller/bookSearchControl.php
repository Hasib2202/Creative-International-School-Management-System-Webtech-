<?php
    include_once '../model/DatabaseConnection.php';
    
    $books = $_REQUEST['books'];

    $result = searchBooks($books);

    echo $result;
?>