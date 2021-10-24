<?php
$username = $_POST['username'];
$password = $_POST['password'];
$mail = $_POST['mail'];
if(strlen($password) < 8){
  echo "you need to write 8 or more charecters";
  echo "<br><a href='../HTML/SignUpLogInCust.html'>Go back</a>";
  exit();
}
$conn=mysqli_connect("localhost","root","","syber");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username='".$username."'";
$r = $conn->query($sql);

if ($r->num_rows > 0) {
  echo "username is already exist";
  echo "<br><a href='../HTML/SignUpLogInCust.html'>Cant sign up please try again</a>";
  exit();
}

$hashed=password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, passwordP, Mail) VALUES ('$username','$hashed','$mail')";

if ($conn->query($sql) == TRUE)
 {
   $subject  = 'Testing sendmail.exe';
   $message  = 'for every registration you get 40% discount';
   $headers  = 'From: [vacationtime2345]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
    mail($mail, $subject, $message, $headers);
    header('Location:../HTML/SignUpLogInCust.html');
  } 
  else
   {
    echo "Error creating table: " . $conn->error;
  }
  $conn->close();
?>
