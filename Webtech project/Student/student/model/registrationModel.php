<?php
    require_once('db.php');

    function courseAddDrop($course_id, $student_id) {
        $conn = getConnection();

        $sql = "SELECT * FROM registrations WHERE student_id = {$student_id} AND course_id = {$course_id}; ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

		if($count == 0){
			$sql = "INSERT INTO registrations (student_id, course_id) VALUES ('$student_id', '$course_id')";
            $result = mysqli_query($conn, $sql);

            if($result){
                return "added";
            }else{
                return "failed";
            }
		}else{
			$sql = "DELETE FROM registrations WHERE course_id = {$course_id} AND student_id = {$student_id};";
            $result = mysqli_query($conn, $sql);

            if($result){
                return "dropped";
            }else{
                return "failed";
            }
		}
    }

    function courseRegistrationCheck($course_id, $student_id) {
        $conn = getConnection();

        $sql = "SELECT * FROM registrations WHERE student_id='$student_id' AND course_id='$course_id'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

		if($count > 0){
			echo true;
		}else{
			echo false;
		}
    }

    function bookAddCancel($book_no, $student_id) {
        $conn = getConnection();

        $sql = "SELECT * FROM registrations WHERE student_id = {$student_id} AND book_no = {$book_no}; ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

		if($count == 0){
			$sql = "INSERT INTO registrations (student_id, book_no) VALUES ('$student_id', '$book_no')";
            $result = mysqli_query($conn, $sql);

            if($result){
                return "added";
            }else{
                return "failed";
            }
		}else{
			$sql = "DELETE FROM registrations WHERE book_no = {$book_no} AND student_id = {$student_id};";
            $result = mysqli_query($conn, $sql);

            if($result){
                return "cancelled";
            }else{
                return "failed";
            }
		}
    }

    function bookAdditionCheck($book_no, $student_id) {
        $conn = getConnection();

        $sql = "SELECT * FROM registrations WHERE student_id='$student_id' AND book_no='$book_no'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

		if($count > 0){
			echo true;
		}else{
			echo false;
		}
    }
?>