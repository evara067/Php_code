<?php
    session_start();

    if(!$_SESSION['un']) {
        header('location:login.php');
        return;
    }

    include "config.php";

    $query = "select * from users";

    $result = mysqli_query($connection, $query);

    $total_rows = mysqli_num_rows($result);

    $status = $_GET['info'] ?? "";

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    Welcome <?php echo $_SESSION['un']; ?>
    <a href="logout.php">Logout</a>


    <h2><?php echo $status; ?></h2>



    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>

            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php

            for ($i = 0; $i < $total_rows; $i++) {

                $data = mysqli_fetch_assoc($result);

            ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['email'] ?></td>

            <td><a href="edit.php?editId=<?php echo $data['id']; ?>" class="btn-edit">Edit</a></td>
            <td><a href="delete.php?deleteId=<?php echo $data['id']; ?>" class="btn-delete">Delete</a></td>
        </tr>
        <?php }?>


    </table>

</body>

</html>