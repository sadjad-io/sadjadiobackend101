<?php
if(isLogin()){
    require_once('../views/profile.php');
} else {
    header("Location: /login");
}
