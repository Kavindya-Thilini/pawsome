<?php
$servername = "localhost";
$database = "u159462725_pets_db";
$username = "u159462725_pets_user";
$password = "Pets_123456#";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>