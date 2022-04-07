<?php
session_start();
    if(isset($_SESSION['sessions'])){
        header("Location:dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <section id="content">
        <section id="page_left">
            <img src="img/login.png" alt="login Image" class="image">
        </section>
        <section id="page_right">
            <form action="control.php" method="post">
            <div class="main-form">
                <div class="main-form-top">
                <h1>Login</h1>
                <div class="input">
                    <input type="text" name="username" id="username" placeholder="Username" required> 
                </div>
                <div class="input">
                    <input type="password" name="password" id="password" placeholder="Password" required> 
                </div>
                   
                    <a href="#" class="link">Forgot Password</a>
                
                <div class="btn-box">
                    <button class="btn">Login</button>
                </div>
                <p style="text-align:center; margin-top:15px; color:red;">
            
                    <?php
                        if(isset($_SESSION['incorrect_error'])){
                            echo $_SESSION['incorrect_error'];
                            unset($_SESSION['incorrect_error']);
                        }
                        if(isset($_SESSION['quiting'])){
                            echo $_SESSION['quiting'];
                            unset($_SESSION['quiting']);
                        }
                        
                    ?>

                </p>
                </div>
            <div class="main-form-bottom">
                <p>Don't Have an Account?</p>
                <a href="#">Sign Up</a>
            </div>
            </div>
            
            </form>
        </section>
    </section>
</body>
</html>