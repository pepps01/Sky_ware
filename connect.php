<?php 

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 9000;

$conn = new mysqli($host, $user, $password, $db);

if (!$conn) {
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
}else{
    echo ("Connected!");
}


