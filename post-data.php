<?php
$servername = "localhost";
$dbname = "id22109091_codevsi";
$username = "id22109091_admin";
$password = "Codevsi2024@";
 
$api_key_value = "12345";
$api_key= $value1 = "";
$value1 = $_POST;
echo "Received ae data: " . $value1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $value1 = $_POST["data"];
  
    echo "Received data: " . $value1; // Print the received data
} else {
  echo "Nothing received using HTTP POST.";
}
?>