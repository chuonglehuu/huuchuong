<?php
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
    if ($username == 'admin' && $password == '123') {
        header("location:dashboard.html");
    } elseif ($username == 'boss' && $password == '123') {
        header("location:boss.html");
    } else
    {
        header("location:dashboard.html");
        echo "<p>incorrect username and password</p>";
    }
?>
