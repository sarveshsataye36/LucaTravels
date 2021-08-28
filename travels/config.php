<?php
/*
This file contain database configuration file
*/

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','lucatours');

// try connec to database

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// CHECK THE CONNECTION

if($conn == false)
{
    dir('Error in connection please check the internet connection');
}


?>