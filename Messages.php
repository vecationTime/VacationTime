<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);
$fullname = $_POST['fullname'];
$email = $_POST['Email'];
$messages = $_POST['Messages'];

$sql = "INSERT INTO messages (FullName, Email, UserMessages) VALUES ('$fullname','$email','$messages')";

$result = mysqli_query($conn, $query);


if ($conn->query($sql) == true) {
    header('Location:../PHP/MessagesS.php');
 } else {
     header('Location:../PHP/MessagesError.php');
 }
    
 $conn->close();

?>
