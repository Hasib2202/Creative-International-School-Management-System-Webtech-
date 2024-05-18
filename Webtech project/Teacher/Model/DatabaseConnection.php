<?php
	
	require_once('db.php');
	
 
        function validateUser($ID, $password){

		$conn = getConnection();

		$sql = "select * from teacher where id='{$ID}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(is_countable($row) && count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into teacher (id, name, email, mobile, gender, dob, password) values ( '{$user['ID']}', '{$user['uname']}', '{$user['email']}', '{$user['mobile']}', '{$user['gender']}', '{$user['dob']}', '{$user['password']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function insertNotes($user){

		$conn = getConnection();
		$sql = "insert into teacher_notes (notes) values ( '{$user['name']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertNotes1($user){

		$conn = getConnection();
		$sql = "insert into id, notes (notes) values ( '{$user['id']}', '{$user['name']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function getUserById($Id){

		$conn = getConnection();

		$sql = "select * from teacher where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function getNotesById($Id){

		$conn = getConnection();

		$sql = "select * from teacher_notes where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function deleteTeacherNotesById($Id){
		$conn = getConnection();
		$sql = "delete from teacher_notes where id='$Id'";
		$result = mysqli_query($conn,$sql);
		if($result){
			header('location: ../View/ViewUploadedNotes(Teacher).php?your info is deleted');
		}
		else
		{
			header('location: ../View/ViewUploadedNotes(Teacher).php?Not deleted your info');
		}
	
		
	}

	
	function getStudentById($Id){

		$conn = getConnection();

		$sql = "select * from student where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	
	
	
	function getAllTeacherNotes(){
		$conn = getConnection();
		$sql = "select * from teacher_notes";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}
	
	
	function getAllStudentNotes(){
		$conn = getConnection();
		$sql = "select * from notes";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function updateNotes($Id, $userinfo){
		$conn = getConnection();
		$sql = "update teacher_notes set notes='{$userinfo['name']}' where id='{$Id}'";
		//print_r($sql);
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getMarksById($Id){

		$conn = getConnection();

		$sql = "select id, name, class, roll, marks from student where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	
	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from student";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}
	function getAllStudentsMarks(){
		$conn = getConnection();
		$sql = "select id, name, class, subject, section, roll, marks from student";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function getAllBooks(){
		$conn = getConnection();
		$sql = "select isbn, title, author, edition from book_info";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function getAllSchoolNotice(){
		$conn = getConnection();
		$sql = "select * from school_notice";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}
	

	function updatePassword($Id, $newpass){
		$conn = getConnection();
		$sql = "update teacher set password='{$newpass}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProfile($Id, $userinfo){
		$conn = getConnection();
		$sql = "update teacher set name='{$userinfo['uname']}', email='{$userinfo['email']}', mobile='{$userinfo['mobile']}', gender='{$userinfo['gender']}', dob='{$userinfo['dob']}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updateMarks($Id, $userinfo){
		$conn = getConnection();
		$sql = "update student set marks='{$userinfo['marks']}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	


	function deleteMarksById($Id){
		$conn = getConnection();
		$sql = "update student set marks=NULL where id='$Id'";
		$result = mysqli_query($conn,$sql);
		if($result){
			header('location: ../View/StudentListMarks.php?your info is deleted');
		}
		else
		{
			header('location: ../View/StudentListMarks.php?Not deleted your info');
		}
	
	}
     function StudentSearch($name)
	{
	   $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	   $sql = "select * from student where name like '%{$name}%'";
	   $result = mysqli_query($con, $sql);
	   $row = mysqli_fetch_assoc($result);
	}
	
	


?>