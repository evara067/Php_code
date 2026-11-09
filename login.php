<?php

    include 'config.php';

    $info = $_GET['info'] ?? '';

?>

<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <h2><?php echo $info; ?></h2>

    <form action="tasks.php" method="POST">
        <div class="container">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for=" psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <hr>

            <input type="hidden" value="login" name="action">
            <button type="submit" class="registerbtn">Login</button>
        </div>
    </form>

</body>

</html>