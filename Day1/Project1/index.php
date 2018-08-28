<?php
session_start();

if(isset($_SESSION['page_count'])){
     $_SESSION['page_count'] += 1;
} else {
     $_SESSION['page_count'] = 1;
}
echo 'شما برای بار ' . $_SESSION['page_count'] . ' ریکوئست ارسال کرده اید !' ;

?>
