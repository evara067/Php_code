<?php

include "config.php";

$deleteId = $_GET['deleteId'] ?? '';

if ($deleteId) {
    
    $query = "DELETE FROM users WHERE id = $deleteId";
    mysqli_query($connection, $query);

    header("location: all-users.php");
    
}
else {
    header("location:all-users.php");
}

?>