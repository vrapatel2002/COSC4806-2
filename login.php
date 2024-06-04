<?php
    session_start();
    require_once('user.php');




    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User();
        $user_data = $user->validate_user($username, $password);

        print_r($user_data);

        if ($user_data) {
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['authenticated'] = 1;
            header('Location: /index.php');
            exit();
        } else {
            if (!isset($_SESSION['failed_attempt'])) {
                $_SESSION['failed_attempt'] = 1;
            } else {
                $_SESSION['failed_attempt']++;
            }
            $error = 'Invalid username or password';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body> 

    <h1> Login form</h1>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    <form action="" method="post">

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

