<?php

session_start();

unset($_SESSION['un']);
unset($_SESSION['em']);
session_destroy();

header('location:login.php');
?>