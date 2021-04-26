<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic_crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

//insert statement:inserting data into table
$sql = "INSERT INTO users_register (first_name, last_name, username, password)
VALUES ('$firstname', '$lastname', '$username', md5('$password'))";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



//echo "Connected successfully";
?>