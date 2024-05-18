<?php

// LOGIN
require_once('database.php');


function authenticateUser($id, $pass) 
{
    $con = conn();

    $sqlLogin = "SELECT role FROM users WHERE id='$id' AND password='$pass'";
    $result = mysqli_query($con, $sqlLogin);

    if ($result && $result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $role = $row['role'];
        mysqli_close($con); 
        return $role;
    }
    else 
    {
        mysqli_close($con); 
        return false;
    }
}
// REGISTRATION
function registerUser($id, $name, $email, $password, $role) 
{
    $conn = conn(); 
    $sql = "INSERT INTO users (id, name, email, password, role) VALUES ('$id', '$name', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) 
    {
        mysqli_close($conn); 
        return true;
    } 
    else 
    {
        mysqli_close($conn); 
        return false;
    }
}
//ADMIN
function getAdminName($id) {

    $conn = conn();

    $sql = "SELECT name FROM users WHERE id = '$id'";


    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $adminName = $row['name'];
    } else {
        $adminName = "Unknown";
    }

    $conn->close();
    return $adminName;
}

//VIEW ADMIN
function getProfiles($id){
    $conn = conn();
    $sql = "select * from users where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
//UPDATE ADMIN

function updateProfile($id, $name, $email) {
    $conn = conn();
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating record: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}
//ADMIN CHANGE PASSWORD

function updatePassword($id, $newPassword) {
    $conn = conn();
    $sql = "UPDATE users SET password='$newPassword' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating password: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}



//TEACHER INSERT
function insert($id, $name, $email, $mobile, $gender, $dob, $subject, $password){
    $conn = conn();

    $sql = "INSERT INTO teacher (id, name, email, mobile, gender, dob, subject, password) VALUES ('$id', '$name', '$email', '$mobile', '$gender', '$dob', '$subject', '$password')";

    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

//VIEW TEACHER
function getAllTeachers() {
    $conn = conn();
    $sql = "SELECT * FROM teacher";
    $result = $conn->query($sql);
    $teachers = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $teachers[] = $row;
        }
    }
    mysqli_close($conn);
    return $teachers;
}

//UPDATE TEACHER

function updateTeacher($id, $name, $email, $mobile, $gender, $dob, $subject) {
    $conn = conn();
    $sql = "UPDATE teacher SET name='$name', email='$email', mobile='$mobile', gender='$gender', dob='$dob', subject='$subject' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating record: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}


function getTeacherById($id) {
    $conn = conn();
    $stmt = $conn->prepare("SELECT * FROM teacher WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $teacher = $result->fetch_assoc();
    $stmt->close();
    mysqli_close($conn);
    return $teacher;
}


// Delete teacher by ID
function deleteTeacherById($id) {
    $conn = conn();
    $sql = "DELETE FROM teacher WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $success = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    return $success;
}




//STUDENT


function deleteStudentById($id) {
    $conn = conn();
    $sql = "DELETE FROM student WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $success = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    return $success;

}

function getStudentById($id) {
    $conn = conn();
    $sql = "SELECT * FROM student WHERE id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        mysqli_close($conn);
        return $row;
    } else {
        mysqli_close($conn);
        return null;
    }
}

function updateStudent($id, $name, $email, $mobile, $gender, $dob, $address, $class, $section, $roll) {
    $conn = conn();
    $sql = "UPDATE student SET name='$name', email='$email', mobile='$mobile', gender='$gender', dob='$dob', address='$address', class='$class', section='$section', roll='$roll' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating record: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}

function insertStudent($id, $name, $email, $mobile, $gender, $dob, $password, $address, $class, $section, $roll, $fees,$amount){
    $conn = conn();

    $sql = "INSERT INTO student (id, name, email, mobile, gender, dob, password, address, class, section, roll,fees,amount) 
            VALUES ('$id', '$name', '$email', '$mobile', '$gender', '$dob', '$password', '$address', '$class', '$section', '$roll','$fees','$amount')";
            
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn); 
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function getAllStudents() {
    $conn = conn();
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $students = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }
    mysqli_close($conn);
    return $students;
}
//STUDENT PAYMENT
function updateStudentFees($student_id, $new_balance, $amount_paid)
{
    $conn = conn();

    $sql = "UPDATE student SET fees = fees - ?, balance = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("dds", $amount_paid, $new_balance, $student_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


//LIBRARIAN
function insertLibrarian($id, $name, $email, $mobile, $gender, $dob, $password){
    $conn = conn();

    $sql = "INSERT INTO librarian (id, name, email, mobile, gender, dob, password) VALUES ('$id', '$name', '$email', '$mobile', '$gender', '$dob', '$password')";
    //                                                                                                  
    if ($conn->query($sql) === TRUE) 
    {
        mysqli_close($conn); 
        return true;
    } 
    else 
    {
        mysqli_close($conn); 
        return false;
    }
}

function getAllLibrarians() {
    $conn = conn();
    $sql = "SELECT * FROM librarian";
    $result = $conn->query($sql);
    $teachers = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $teachers[] = $row;
        }
    }
    mysqli_close($conn);
    return $teachers;
}

function getLibrarianById($id) {
    $conn = conn();
    $stmt = $conn->prepare("SELECT * FROM librarian WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $librarian = $result->fetch_assoc();
    $stmt->close();
    mysqli_close($conn);
    return $librarian;
}

function updateLibrarian($id, $name, $email, $mobile, $gender, $dob) {
    $conn = conn();
    $sql = "UPDATE librarian SET name='$name', email='$email', mobile='$mobile', gender='$gender', dob='$dob' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating record: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}

function deleteLibrarianById($id) {
    $conn = conn();
    $sql = "DELETE FROM librarian WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $success = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    return $success;
}

//Notice INSERT
function insertNotice($id, $notice, $date){
    $conn = conn();

    $sql = "INSERT INTO notice (id, notice, date) VALUES ('$id', '$notice', '$date')";
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}



//NOTICE VIEW
function getAllNotice() {
    $conn = conn();
    $sql = "SELECT * FROM notice";
    $result = $conn->query($sql);
    $notices = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $notices[] = $row;
        }
    }
    mysqli_close($conn);
    return $notices;
}
// EDIT NOTICE

function getNoticeById($id) {
    $conn = conn();
    $sql = "SELECT * FROM notice WHERE id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        mysqli_close($conn);
        return $row;
    } else {
        mysqli_close($conn);
        return null;
    }
}

function updateNotice($id, $notice, $date) {
    $conn = conn();
    $sql = "UPDATE notice SET notice='$notice', date='$date' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating record: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}

function deleteNoticeById($id) {
    $conn = conn();
    $sql = "DELETE FROM notice WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $success = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    return $success;

}

//BOOK VIEW
function getAllBooks() {
    $conn = conn();
    $sql = "SELECT * FROM bookinfo";
    $result = $conn->query($sql);
    $books = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
    mysqli_close($conn);
    return $books;
}


//COURSE INSERT
function insertCourse($cname,$cid,$class,$description){
    $conn = conn();

    $sql = "INSERT INTO course (name, id, class, description) VALUES ('$cname', '$cid', '$class', '$description')";

    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function getAllCourses() {
    $conn = conn();
    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    $courses = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $courses[] = $row;
        }
    }
    mysqli_close($conn);
    return $courses;
}

function updateCourse($id, $name, $class, $description) {
    $conn = conn();
    $sql = "UPDATE course SET name='$name', class='$class', description='$description' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        return true;
    } else {
        echo "Error updating record: " . $conn->error;
        mysqli_close($conn);
        return false;
    }
}

function getCourseById($id) {
    $conn = conn();
    $sql = "SELECT * FROM course WHERE id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        mysqli_close($conn);
        return $row;
    } else {
        mysqli_close($conn);
        return null;
    }
}

//All Count
function getTotalTeachers() {
    $conn = conn();
    $sql = "SELECT COUNT(*) AS total_teachers FROM teacher";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_teachers'];
    } else {
        return 0;
    }
}

function getTotalStudents() {
    $conn = conn();
    $sql = "SELECT COUNT(*) AS total_students FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_students'];
    } else {
        return 0;
    }
}

function getTotalLibrarians() {
    $conn = conn();
    $sql = "SELECT COUNT(*) AS total_librarians FROM librarian";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_librarians'];
    } else {
        return 0;
    }
}

function getTotalNotices() {
    $conn = conn();
    $sql = "SELECT COUNT(*) AS total_notices FROM notice";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_notices'];
    } else {
        return 0;
    }
}

function getTotalCourses() {
    $conn = conn();
    $sql = "SELECT COUNT(*) AS total_courses FROM course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_courses'];
    } else {
        return 0;
    }
}

//Balance

function getTotalBalance() {
    $conn = conn(); 

    $sql = "SELECT SUM(balance) AS total_balance FROM student";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result(); 
    $row = $result->fetch_assoc(); 

    return $row['total_balance']; 
}


?>




