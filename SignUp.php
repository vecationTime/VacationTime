<?php

$username = $_POST['username'];
$password = $_POST['password'];
$mail = $_POST['mail'];

if(strlen($password) != 8){

  echo "you need to write 8 charecters";
  echo "<br><a href='../HTML/SignUupILogIn.html'>Go back</a>";
  
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


$sql = "INSERT INTO users (username, passwordP, Mail) VALUES ('$username','$password','$mail')";
if ($conn->query($sql) == TRUE) {
    //echo "You have signed up successfuly";
    //echo "<br><a href='../HTML/Sign-up_Log-in.html'>Go and log in</a>";
    $headers = 'From: Artisans Web webmaster@artisansweb.net'."\r\n".'Reply-To: webmaster@artisansweb.net'."\r\n".
    'X-Mailer: PHP/'.phpversion()."\r\n";

    $message = 'Je suis fan de lequipe de france!';
    mail('king2667@gmail.com', 'promotion', $message, $headers);

    echo "Mail sent successfuly";

  } else {
    echo "Error creating table: " . $conn->error;
  }
 
  $conn->close();

?>