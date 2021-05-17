<?php

$username = @$_POST['username'];
$password = @$_POST['password'];
 
$conn=mysqli_connect("localhost","root","","syber");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO users (`username`, `password`) VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record is inserted successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
  


?>
