<?php

	setcookie('flag', true, time()-1, '/'); 

	header('location: ../view/login.php');

?>