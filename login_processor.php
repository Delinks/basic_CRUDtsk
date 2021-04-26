<?php
session_start();

require_once './db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users_register WHERE username = '$username'";
$result = $conn->query($sql);

if (empty($result) || $result->num_rows <= 0) {
    die('Login failed: Incorrect username or password');
}

// output data of each row
$user = $result->fetch_assoc();

if($user['password'] !== md5($password)){
    die('Login failed: Please enter correct login details');
}



// echo "Firstname = {$user['first_name']} <br> 
//     Lastname = {$user['last_name']} <br>
//     Username = {$user['username']}";

$_SESSION['user_data'] = $user;

header("Location: dashboard.php");

// die('');