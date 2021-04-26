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




//to view courses added by user
$sql = "SELECT course_code, course_name, total_units, duration  FROM tbl_courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "code: " . $row["course_code"]. " - Name: " . $row["course_name"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();



?>


