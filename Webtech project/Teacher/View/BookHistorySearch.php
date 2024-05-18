<?php
if(isset($_REQUEST['name'])) {
   
    $name = $_REQUEST['name'];

    $con = mysqli_connect('localhost', 'root', '', 'sms');

    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM book_info WHERE title LIKE CONCAT('%', ?, '%')";

    if($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $name_param);

        $name_param = $name;

        if(mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) > 0) {
    
                $response = "<table border='1' width='100%' cellspacing='0'>
                                <tr align='center'>
                                    <td>ISBN</td>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Edition</td>
                                </tr>";

                while($row = mysqli_fetch_assoc($result)) {
                    $response .= "<tr align='center'>
                                    <td>{$row['isbn']}</td>
                                    <td>{$row['title']}</td>
                                    <td>{$row['author']}</td>
                                    <td>{$row['edition']}</td>
                                </tr>";
                }

              
                $response .= "</table>";
                echo $response;
            } else {
           
                echo "No books found matching the search criteria.";
            }
        } else {
            
            echo "Error: " . mysqli_error($con);
        }

        
        mysqli_stmt_close($stmt);
    } else {
        
        echo "Error: Unable to prepare statement.";
    }

    
    mysqli_close($con);
} else {
    
    echo "Error: Missing search query.";
}
?>
