<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";
session_start();
$conn = mysqli_connect($server, $username, $password, $db_name);
$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($password) != 8){

    echo "you need to write 8 charecters";
    echo "<br><a href='../HTML/SignUpLogIn.html'>Go back</a>";
    
    exit();
  
  }

$_SESSION['username']=$username;
$_SESSION['password']=$password;

$hashed=password_hash($password, PASSWORD_DEFAULT);
$rep=password_verify($password, $hashed);

$query = "SELECT * FROM users WHERE username = '$username'";

$result = mysqli_query($conn, $query);

$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        $rep=password_verify($password, $row['passwordP']);
        if($rep == 1)
        {
            header('Location:../PHP/IsraelCountry.php');
        }
        else{
            header('Location:../HTML/SignUpLogIn.html');
        }
    }
}

?>
