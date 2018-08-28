<?php
// print_r($_POST);
session_start();
if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['pass'])){
    $pass = $_POST['pass'];
}
if($name == "Amir" && $pass == "123456") {
    $_SESSION['name'] = "Amir";
    $_SESSION['isLoggin'] = True;
    header("Location: http://localhost:8000/profile.php");
} else {
    header("Location: http://localhost:8000/erorr.php");
}