<?php 

$username = filter_input(INPUT_POST, 'Username');
$password = filter_input(INPUT_POST, 'Password');

if(!empty($username)){
if(!empty($password)){
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "syber"

//Create connection
$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno() .')'.mysqli_connect_error());
}
else{
    $sql = "INSERT INTO users (Username, Password)
    values ($Username, $Password)";

    if($conn->query($sql)){
        echo "New record is inserted successfully";
    }
    else{
        echo "Error: ".$sql ."<br>". $conn->error;
    }
    $conn->close();
}


}
else{
    echo "password should not be empty";
}
}
else{
    echo "username should not be empty";
}

?>
