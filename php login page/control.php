<?php
session_start();
$username = "incarter";
$password = "incarter@x1";

if(isset($_POST['username'])){
    if($username == $_POST['username'] && $password == $_POST['password']){
        $_SESSION['sessions'] = $username;
        header("Location:dashboard.php");
    }
    else{
        $_SESSION["incorrect_error"] = "Username or Password Incorrect";
        header("Location:login.php");
    }
}
if(isset($_GET['exit'])){
    unset($_SESSION['sessions']);
    $_SESSION['quiting'] = "Sign Out Successful";
    header("Location:login.php");
}
?>