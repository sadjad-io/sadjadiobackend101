<?php
if(isset($_SESSION['login']) && $_SESSION['login'] == true){
    echo "<center>سلام " . $_SESSION['name'] . "</center>";
} else {
    header("Location: /login");
}