<?php
require_once '../libs/Medoo.php';
use Medoo\Medoo;
 
$database = new Medoo([
    'database_type' => $config['database']['type'],
    'database_name' => $config['database']['name'],
    'server' => $config['database']['server'],
    'username' => $config['database']['username'],
    'password' => $config['database']['password'],
]);