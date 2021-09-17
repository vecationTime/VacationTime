<?php
$CheckIn = $_POST['Check-in'];
$CheckOut = $_POST['Check-out'];

$conn=mysqli_connect("localhost","root","","syber");

$query = "SELECT * FROM OrderHotel WHERE CheckIn = '$CheckIn' and CheckOut = '$CheckOut'";

$result = mysqli_query($conn, $query);

$resultCheck = mysqli_num_rows($result);
        echo "<br>";
if($resultCheck>0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['Available']=="Yes")
    {
      header('Location:../HTML/Rooms.html');
    }
    else
    {
      header('Location:../PHP/HerodsDateError.php');
    }
  }
}
  $conn->close();
?>
