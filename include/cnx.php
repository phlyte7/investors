<?php
$username = "root";
$password = ""; //T;MT)eyBGTqM
$hostname = "localhost"; 
$dbname = "investors";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
?>