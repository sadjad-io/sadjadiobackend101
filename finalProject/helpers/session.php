<?php

function setSession($status,$name=null){
    $_SESSION['login'] = $status;
    $_SESSION['name'] = $name;
}

function isLogin(){
    return $_SESSION['login'];
}