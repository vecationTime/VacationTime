<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamilla Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/MamillaHotel.css">
    <link rel="stylesheet" a href="../CSS/Login.css"/>
<style>
  body
  { overflow-y: scroll;}
  .btn {
      
    position: relative;
    left: 700px;
  width: 150px;
  height: 49px;
  border: none;
  outline: none;
  border-radius: 48px;
cursor: pointer;
background-color: #20dbc2;
color: #fff;
text-transform: uppercase;
font-weight: 600;
margin: 10px 0;
transition: all 0.5s;
padding: 5px 5px 5px 5px;
}
.btn:hover {
background-color: #00bfa6;
}
</style>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1>Mamilla Hotel</h1>
    <h3 style="text-align: center; color: royalblue;">for more info please call: 02-548-2200 </h3>
    <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />

          <span></span>
          <span></span>
          <span></span>
          
          <ul id="menu">

            <strong><a href="../HTML/VacationTime.html"><li>Home</li></a></strong>
            <strong><a href="../HTML/RentCar.html"><li>Rent a car</li></a></strong>
            <strong><a href="../PHP/OpinionRatingOrigin.php"><li>RatingOpinion</li></a></strong>
            <strong><a href="../Video/Mamilla Hotel, Jerusalem.mp4"><li>Virtual tour</li></a></strong>
          </ul>
        </div>
      </nav>
      
      <a href="../HTML/MamillaHotel.html"><input class="btn solid" type="submit" value="Go Back"/></a>

        <?php
        $conn=mysqli_connect("localhost","root","","syber");

        $sql = "SELECT * FROM orderhotel;";

        $result = mysqli_query($conn, $sql);

        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            if($row['Available']=="Yes"){
                echo "<strong><p style = 'color: red; text-align: center; font-size: 25px';></strong>" .$row['CheckIn']."-".$row['CheckOut']."-".$row['Available']."<br>";
                echo "<br>";
                }
          }
        }
        ?>
</body>
</html>
