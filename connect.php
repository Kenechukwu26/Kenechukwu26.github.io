<?php
$host ="localhost";
$username ="root";
$hostpassword = "";
$dbName = "foliodatabase";
$conn = mysqli_connect($host,$username,$hostpassword,$dbName);
if(!$conn){
    die("Could not connect to database");
}
?>