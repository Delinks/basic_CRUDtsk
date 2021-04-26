<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth_task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//Edit/Update a course added by user

$sql = "UPDATE tbl_courses SET course_name='Access to Python' WHERE course_code=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
