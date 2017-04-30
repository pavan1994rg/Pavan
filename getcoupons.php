<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productstore";
header('Access-Control-Allow-Origin: *');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$sql = "SELECT * FROM coupons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $emparray=array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $emparray[] = $row;
    }
} else {
    echo "0 results";
}
echo json_encode($emparray);
$conn->close();
?>
