<?php 
    //Start Session
    session_start();

    //creat constants to store non repeating values
    define('SITEURL','http://localhost/food-shop/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-shop');
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//dataBASE CONNECTION
    $db_select = mysqli_select_db($conn, 'food-shop') or die(mysqli_error());//selecting database
?>