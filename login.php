<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body> 

    <h1> Login form</h1>
    <form action="/validate.php" method="post">

        <label for="username">Username:</label>
        <br>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <br>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Submit">
            <?php if (isset($_SESSION['failed_attempt'])): ?>
                <p>Failed attempt: <?= $_SESSION['failed_attempt']; ?></p>
            <?php endif; ?>
    </form>
</body>


</html>