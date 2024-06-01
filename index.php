<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vratik</title>
</head>
<body> 
    <h1> Assignment 1</h1>
    <p> Welocme, <?=$_SESSION['username']?></p>
</body>
<footer>
    <p> <a href="/logout.php"> Click here to logout</a></p>
</footer>
</html>