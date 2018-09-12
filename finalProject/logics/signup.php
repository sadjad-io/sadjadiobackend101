<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    // input validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = null;
    $lastname = null;
    if(isset(($_POST['name']))){
        $name = $_POST['name'];
    }
    if(isset(($_POST['lastname']))){
        $lastname = $_POST['lastname'];
    }
    // check if data exist 
    $result = $database->count("users",[
        "username" => $username
    ]);
    if($result == 0) {
        // is Ok 
        $database->insert('users',[
            "name" => $name,
            "lastname" => $lastname,
            "username" => $username,
            "password" => md5($password)
        ]);
        $signup = 1;
        require_once('../views/signup.php'); 
    } else {
        $signup = 2;
        require_once('../views/signup.php'); 
    }
} else {
   // i want just to see Form ! 
   $signup = 0;
   require_once('../views/signup.php'); 
}