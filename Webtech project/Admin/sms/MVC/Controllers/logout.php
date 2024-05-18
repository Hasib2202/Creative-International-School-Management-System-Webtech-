<?php
    
    session_start();
    session_destroy();
    header("Location: ../Views/login.php");
    exit;

?>
