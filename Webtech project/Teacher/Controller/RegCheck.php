<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$name = $_POST['uname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $ID = $_POST['ID'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $dd = $_POST['dob'];

		if($name == "" || $email == "" || $mobile == "" || $ID == "" || $password == "" || $confirm == "" || $dd == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

                function FormValidation()
                {
                    $name = $_POST['uname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $ID = $_POST['ID'];
                    $password = $_POST['password'];
                    $dd = $_POST['dob'];

                    $Validation = false;

                    if(strlen($name) > 3 && strlen($ID) == 4 && strlen($mobile) == 11 && strlen($password) > 7)
                    {
                        if(preg_match('/[@#\$%]/', $password))
                        {
                        
                            if(preg_match('/^[A-Za-z]+$/', $name))
                            {
                                $Validation = true;
                            }
                            else
                            {
                                echo "Name not valid (Should be Alphabet) ";
                            }
                        }
                        else
                        {
                            echo "Password not valid (must contain a special character) ";
                        }
                    }
                    else
                    {
                        if(strlen($name) <= 3)
                            echo "Name not valid (length should be greater than 3) ";
                        if(strlen($ID) != 4)
                            echo "ID not valid (must contain 4 digits) ";
                        if(strlen($mobile) != 11)
                            echo "Mobile number not valid (must contain 11 digits) ";
                        if(strlen($password) <= 7)
                            echo "Password not valid (length should be greater than 7) ";
                    }

                    return $Validation;
                }

                if(FormValidation())
                {
                    $user = [
                        'uname' => $name,
                        'mobile' => $mobile,
                        'ID' => $ID,
                        'password' => $password,
                        'email' => $email,
                        'dob' => $dd
                    ];

                    $status = insertUser($user);

                    if($status){
                        header('location: ../View/LoginPage.php');
                    }else{
                        echo "error";
                    }
                }
			}else{
				echo "password & confirm password mismatch..";
			}
		}
	}
?>
