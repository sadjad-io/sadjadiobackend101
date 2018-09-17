<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $database->select('users',[
        "name",
        "lastname",
        "username",
      ],[
        "AND" => [
            "password" => md5($password),
            "username" => $username
        ]
    ]);
    $count = count($result);
    if($count == 1){
        // user exist
        setSession(true,$result[0]['name']);
        header("Location: /profile");
    } else {
        // user Not Exist
        $login = 2;
        setSession(false);
        require_once('../views/login.php');
    }
} else {
    // I Just Want To see Login Form :|
    $login = 0;
    setSession(false);
    require_once('../views/login.php'); 
}
