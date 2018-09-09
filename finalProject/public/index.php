<?php
require_once '../helpers/init.php';

$routes = explode('?',$_SERVER['REQUEST_URI']);
switch ($routes[0]) {
    case '/':
        echo "Home";
        break;
  
    case '/about':
        require '../logics/about.php';
        break;

    default:
        echo "Not Found";
        break;
}
