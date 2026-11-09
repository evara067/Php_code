<?php

    include 'config.php';

?>

<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <form action="tasks.php" method="POST">
        <div class="container">
            <h1>Register</h1>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter username" name="username" required>
            <br>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for=" psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

            </select>

            <hr>

            <input type="hidden" value="reg" name="action">

            <button type="submit" class="registerbtn">Register</button>
        </div>


    </form>

</body>

</html>