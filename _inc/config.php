<?php
    /*$dbhost = "localhost";
    $dbname = "project.shop";
    $username = "root";
    $password = "";

    $db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
    /* konštanta
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'sj_7_2024',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);*/
require_once('classes/Database.php');
require_once('classes/Menu.php');
require_once('classes/About.php');
require_once('classes/Page.php');
require_once('classes/Home.php');
require_once('classes/Categories.php');
require_once('classes/Product.php');
require_once('classes/User.php');
require_once('classes/Contact.php');
session_start();
?>