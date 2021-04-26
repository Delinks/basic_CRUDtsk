<?php

session_start();
$_SESSION["user_data"] = "";
session_destroy();
header("Location: Logindex.php");


?>