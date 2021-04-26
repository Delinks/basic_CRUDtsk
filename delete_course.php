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



// sql to delete a course
$sql = "DELETE FROM tbl_courses WHERE course_name=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>