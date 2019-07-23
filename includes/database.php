<?php

    define ("HOST_NAME", "localhost");
    define ("HOST_USER", "root");
    define ("HOST_PASSWORD", "");
    //define ("DB_NAME", "ecommerce_website_db");

    $connect = mysqli_connect(HOST_NAME, HOST_USER, HOST_PASSWORD);
    if(!$connect) {
        die('Server connection error:\n'.mysql_error());
    }

    $createdbifnotexists_query = "CREATE DATABASE IF NOT EXISTS ecommerce_website_db;";
    
    $create_db_query = mysqli_query($connect, $createdbifnotexists_query);
    if(!$create_db_query) {
        die('Database creation error:\n'.mysqli_error());
    }

    mysqli_close($connect);

?>