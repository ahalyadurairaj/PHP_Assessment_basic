<?php
$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$database = "ahalya_php";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connected successfully";
}



$conn->close();
?> 

