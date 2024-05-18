<?php
// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    // Get the ID from the URL parameter
    $Id = $_GET['id'];

    // Validate the ID to ensure it's a non-empty string
    if(!empty($Id)) {
        // Include the database connection file
        include_once('../Model/DatabaseConnection.php');

        // Call the delete function and pass the ID as a parameter
       // $deletemyinfo = deleteTeacherNotesById($Id);

        // Check if the deletion was successful
        if($deletemyinfo) {
            // Redirect to the desired page after successful deletion
            header('location: ../View/ViewUploadedNotes(Teacher).php');
            exit(); // Stop script execution after redirection
        } else {
            // Error message if deletion failed
            echo "Error: Failed to delete teacher notes.";
        }
    } else {
        // Error message for empty 'id' parameter
        echo "Error: Empty 'id' parameter in the URL.";
    }
} else {
    // Error message if 'id' parameter is not set in the URL
    echo "Error: Missing 'id' parameter in the URL.";
}
?>
