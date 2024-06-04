<?php
session_start();
if(!isset($_SESSION['authenticated'])){
     header('Location:/login.php');
}
require_once('user.php');

$user = new User();
$user_list = $user->get_all_users();

echo "<pre>";
print_r($user_list);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Connecting database</title>
</head>
<body> 
    <h1> Assignment 2</h1>
    <p> Welocme, <?= $_SESSION['username']?></p>
</body>
<footer>
    <p> <a href="/logout.php"> Click here to logout</a></p>
</footer>
</html>
