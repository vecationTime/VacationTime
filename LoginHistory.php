<?php

$username = $_POST['username'];
$dateh = date("F j, Y, g:i a");
$timeh = date("H:i:s");

if(strlen($password) < 8){
  echo "you need to write 8 charecters";
  echo "<br><a href='../HTML/SignUupILogIn.html'>Go back</a>";
  exit();
}
$conn=mysqli_connect("localhost","root","","syber");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO loginhistory (username, dateh, timeh) VALUES ('$username','$dateh','$timeh')";

if ($conn->query($sql) == TRUE) {
    header('Location:../PHP/IsraelCountry.php');
}else{
    header('Location:../HTML/SignUpLogIn.html');
}
  $conn->close();

?>
