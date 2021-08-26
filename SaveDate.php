<?php

$CheckIn = $_POST['Check-in'];
$CheckOut = $_POST['Check-out'];

$conn=mysqli_connect("localhost","root","","syber");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO OrderHotel (CheckIn, CheckOut, Available) VALUES ('$CheckIn','$CheckOut', 'No')";
if ($conn->query($sql) == TRUE) {
    echo "You have signed up successfuly";
  } else {
    echo "Error creating table: " . $conn->error;
  }
 
  $conn->close();

?>
