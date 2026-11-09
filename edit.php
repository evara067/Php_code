<?php

include "config.php";

$editId = $_GET['editId'] ?? '';

$query = "select * from users where id=$editId";

$result = mysqli_query($connection, $query);

 $data = mysqli_fetch_assoc($result);

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
            <h1>Edit your Info</h1>

            <label for="username"><b>Username</b></label>
            <input type="text" value="<?php echo $data['username'] ?>" name="username" required>
            <br>

            <label for="email"><b>Email</b></label>
            <input type="email" value="<?php echo $data['email'] ?>" name="email" required>

            <input type="hidden" value="<?php echo $data['id'] ?>" name="user-id">

            <input type="hidden" value="edit" name="action">

            <button type=" submit" class="registerbtn">Update</button>
        </div>


    </form>

</body>

</html>