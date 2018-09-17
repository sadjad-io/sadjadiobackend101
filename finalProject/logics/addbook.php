<?php
if(isLogin()){

    $courses = $database->select('courses',[
        "id",
        "name"
    ]);

    $teachers = $database->select('teachers',[
        "id",
        "name",
        "lastname"
    ]);

    $colleges = $database->select('colleges',[
        "id",
        "name"
    ]);

    require_once('../views/addbook.php');
} else {
    header("Location: /login");
}