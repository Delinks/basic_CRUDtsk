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





//Add a course:inserting data into table
$sql = "INSERT INTO tbl_courses (course_code, course_name, total_units, duration)
VALUES ('Php111', 'Introduction to php', '3', '60minutes')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//echo "Connected successfully";
?>