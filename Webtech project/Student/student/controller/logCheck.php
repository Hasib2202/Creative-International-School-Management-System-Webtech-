<?php

	include_once('../model/DatabaseConnection.php');
	session_start();
	

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			
			$status = validateUser($id, $password);
			if($status){

					$_SESSION['id'] = $id;
					setcookie('id', $id, time()+36000, '/');
					$_SESSION['flag'] = true;

					setcookie('flag', true, time()+36000, '/');
					setcookie('id', $id, time() + 36000, '/');
					header('location: ../view/dashboard.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>