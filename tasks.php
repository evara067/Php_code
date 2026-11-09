<?php

session_start();

include 'config.php';

$action = $_POST['action'];

if ($action == 'reg') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $pass     = $_POST['psw'];
    $gender   = $_POST['gender'];

    $hashed = password_hash($pass, PASSWORD_BCRYPT);

    $query = "insert into users(username,email,password,gender) values('$username','$email','$hashed','$gender')";

    mysqli_query($connection, $query);

    header("location:login.php?info={$status}");
    
} 
else if ($action == 'edit') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $id       = $_POST['user-id'];

    $query = "update users set username='$username', email='$email' where id=$id";
    mysqli_query($connection, $query);

    $status = "Updated Successfully";

    header("location:all-users.php?info={$status}");
} else if ($action == 'login') {

    $email = $_POST['email'];
    $pass  = $_POST['psw'];

     $query  = "select * from users where email = '$email'";
     $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        
        $data = mysqli_fetch_assoc($result);
        // print_r($data);exit;

        if (password_verify($pass, $data['password'])) {
            
            $_SESSION['un'] = $data['username'];
            header('location:all-users.php');
            
        } 
        else {
            $status = "Email and password are not matched";
            header("location:login.php?info={$status}");
        }

    } else {
        $status = "Email is not registered";

        header("location:login.php?info={$status}");
    }

}