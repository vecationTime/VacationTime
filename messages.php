<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);
$fullname = $_POST['FullName '];
$email = $_POST['Email'];
$messages = $_POST['UserMessages'];

$sql = "INSERT INTO messages (FullName, Email, UserMessages) VALUES ('$fullname','$email','$messages')";

$query = "SELECT * FROM messages WHERE UserMessages = '$messages' ";

$result = mysqli_query($conn, $query);


if ($conn->query($sql) == true) {
    echo "thank you for speaking with us";
    header('Location:../HTML/VacationTime.html');
 } else {
     echo "Error insert messages: " . $conn->error;
     header('Location:../HTML/ContectUs.html');
 }
    
   

 $conn->close();

?>


/*if(mysqli_num_rows($result) == true){
    header('Location:../HTML/VacationTime.html');

}else{
    header('Location:../HTML/ContectUs.html');
}*/



