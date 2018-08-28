<?php
    session_start();
    if(!isset($_SESSION['isLoggin'])){
      header("Location: http://localhost:8000/login.php");
    }
?>
<!DOCTYPE html>
<html dir="">
    <head>
        <meta charset="utf-8">
        <title><?php echo "Welcome " . $_SESSION['name']; ?></title>
        <style>
            p,h2 {
                display: inline;
            }
        </style>
    </head>
    <body>
        <p><?php echo "Welcome <h2>" . $_SESSION['name'] . "</h2>"; ?></p> <br><br>
        <a href="/date.php">See Date</a> <br>
        <a href="/profile.php">My Profile</a> <br>
        <a href="/logout.php">Logout</a>
    </body>
</html>