<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productstore";
$name=$_GET['name'];
$discount=$_GET['discount'];
$product=$_GET['product'];
$valid=$_GET['valid'];


header('Access-Control-Allow-Origin: *');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO coupons (name, discount, product,valid)
VALUES ('$name', '$discount', '$product','$valid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
