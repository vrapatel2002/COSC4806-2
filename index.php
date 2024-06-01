<?php

require_once('user.php');

$user = new User();
$user_list = $user->get_all_users();

echo "<pre>";
print_r($user_list);
?>


<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Vratik</title>
</head>
<body> 
    <h1> Assignment 1</h1>
    <p> Welocme, </p>
</body>
<footer>
    <p> <a href="/logout.php"> Click here to logout</a></p>
</footer>
</html> -->