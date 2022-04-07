<?php

session_start();
if(empty($_SESSION['sessions'])){
    header("Location:login.php");
}
echo "Hi ".$_SESSION['sessions'];
?>

<br><br>
<a href="control.php?exit">Close</a>