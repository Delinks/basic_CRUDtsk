<?php
session_start();
if(!empty($_SESSION['user_data'])){
    header('Location: dashboard.php');
    return;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Login </h1>
    <form action="login_processor.php" method="POST">

    <input type="text" name="username" placeholder="enter your username">
    <label for="password">
    <input type="text" name="password" placeholder="enter your password">
    <input type="submit" name="login" value="login">
    </form>
	
</body>
</html>

