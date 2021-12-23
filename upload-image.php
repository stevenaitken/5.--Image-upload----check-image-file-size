<?php

include 'includes/db_connx.php';
include 'includes/errors.php';


//set up variables
// target directory for images
$target_dir = "images/"; //
// file and pathname of image
$target_file = $target_dir . basename($_FILES["uploaded-image"]["name"]);

$file_size = $_FILES["uploaded-image"]["size"];


if(isset($_POST["submit"])) {    

// comments go here - fully document this conditional statement
if ( $file_size > 50000) {
    exit ("The file exceeds 50Kb. Please upload a smaller filesize.");
  }



    if (move_uploaded_file($_FILES["uploaded-image"]["tmp_name"], $target_file)) {

        echo "File uploaded successfully." ;
          
    } 
// comments go here - fully document this conditional statement
	else {
       
        exit("There was an error uploading your file.");
    }

} // end of isset()
?>

