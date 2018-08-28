<?php
    session_start();
    if(isset($_SESSION['isLoggin'])){
        if($_SESSION['isLoggin']){
            header("Location: http://localhost:8000/profile.php");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
<style>
</style>
    </head>
    <body>
        <form method="POST" action="auth.php">
            Name: &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="name"> <br> 
            Password: <input type="password" name="pass"> <br> <br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>