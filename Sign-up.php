<?php



$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($password) != 8){

  echo "you need to write 8 charecters";
  echo "<br><a href='../HTML/Sign-up_Log-in.html'>GO to Home</a>";
  
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
  echo "<br><a href='../HTML/Sign-up_Log-in.html'>GO to Home</a>";
  exit();

}


$sql = "INSERT INTO users (`username`, `password`) VALUES ('$username','$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record is inserted successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
 
  $conn->close();

?>
