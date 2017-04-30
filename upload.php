<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productstore";
$name=$_GET['name'];
$productdesp=$_GET['productdesp'];
$price=$_GET['price'];
$image=$_GET['image'];
$url="http://localhost/upload/images/".$image;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO productsdata (name, productdesp, price, image)
VALUES ('$name', '$productdesp','$price','$url')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
