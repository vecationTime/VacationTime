<?php

$Rating = $_POST['rating'];
$Opinion = $_POST['opinion'];

$conn=mysqli_connect("localhost","root","","syber");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$sql = "INSERT INTO Opinion (rating, opinion) VALUES ('$Rating','$Opinion')";
if ($conn->query($sql) === TRUE) {
    header('Location: ../PHP/OpinionRaitingS.php');
  } else {
    echo "Error creating table: " . $conn->error;
  }
 
  $conn->close();

?>
