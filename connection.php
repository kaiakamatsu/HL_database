<?php
/*
$dbServername = "sql308.byethost13.com";
$dbUsername = "b13_34684505";
$dbPassword = "trg12b0z";
$dbName = "b13_34684505_HealthLinkDataBase";
*/
$dbServername = "cpl27.main-hosting.eu";
$dbUsername = "heal8312";
$dbPassword = "HLdatabase2023!";
$dbName = "heal8312_Database";

# connecting to a database from a website using PHP 
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 


?>
