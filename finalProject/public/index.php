<?php
session_start();
// Import All Functions and Configs We Need in Each Request
require_once '../helpers/init.php';
// $_SERVER is A Superglobal Array in PHP! Just Google It !
$routes = explode('?',$_SERVER['REQUEST_URI']);
// Route Each Request To Suitable Place!
switch ($routes[0]) {
    case '/':
        echo "Home";
        break;

    case '/about':
        require_once('../logics/about.php');
        break;

    case '/signup':
        require_once('../logics/signup.php');
        break;
        
    case '/profile':
        require_once('../logics/profile.php');
        break;

     case '/addbook':
        require_once('../logics/addbook.php');
        break;

    case '/login':
        require_once('../logics/login.php');
        break;

    case '/logout':
        require_once('../logics/logout.php');
        break;

    default:
        echo "Not Found";
        break;
}
