<?php
$username ="Popidan";
$password = "Popidan2004";
$servername = "localhost";
$numedb = "iqweb";

$conn = new mysqli($servername, $username, $password, $numedb);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>