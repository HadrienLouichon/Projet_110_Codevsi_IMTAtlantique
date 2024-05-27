<?php
 
$servername = "localhost";
$dbname = "id22109091_codevsi";
$username = "id22109091_admin";
$password = "Codevsi2024@";
 
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo 'connection failed for database';
    die("Connection failed: " . $conn->connect_error);
}