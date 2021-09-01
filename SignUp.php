<?php

$username = $_POST['username'];
$password = $_POST['password'];
$mail = $_POST['mail'];

if(strlen($password) != 8){

  echo "you need to write 8 charecters";
  echo "<br><a href='../HTML/SignUpLogIn.html'>Go back</a>";
  
  exit();

}

$conn=mysqli_connect("localhost","root","","syber");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT * FROM users WHERE username='".$username."'";

$r = $conn->query($sql);

if ($r->num_rows > 0) {
  
  echo "username is already exist";
  echo "<br><a href='../HTML/SignUpLogIn.html'>Cant sign up please try again</a>";
  exit();

}
$hashed=password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, passwordP, Mail) VALUES ('$username','$hashed','$mail')";
if ($conn->query($sql) == TRUE) {
   header('Location:../HTML/SignUpLogIn.html');
  } 
  else {
    echo "Error creating table: " . $conn->error;
  }
 
  $conn->close();
?>
