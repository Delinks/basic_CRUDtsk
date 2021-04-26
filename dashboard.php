<?php
session_start();
if(empty($_SESSION['user_data'])){
    die('You are not logged in');
};

$user = $_SESSION['user_data'];
?>
<h2>Welcome <?php echo $user['first_name'] ?>, 
You are now logged in</h2>