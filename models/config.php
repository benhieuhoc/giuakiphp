<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "test1"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connnect feiled: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>
