<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>King Solomon Hotel</title>
    <link rel="stylesheet" href="../CSS/KingSolomonHotel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     

        <h1 >King Solomon Hotel</h1>
    
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
                <strong><a href="../HTML/Rooms.html"><li>Rooms</li></a></strong>
                <strong><a href="../Video/Isrotel King Solomon Hotel, Eilat, Israel+.mp4"><li>Virtual tour</li></a></strong>
              </ul>
            </div>
          </nav>
  
      <form style="margin-top: 250px; margin-left: -50px; text-align: center; " method="POST" action="../PHP/KingSolomonSaveDate.php">
        <label  style="color: crimson; font-size: 20px;" for="Check-in:">Check-in</label>
        <input type="date" name="Check-in">
        
        <label style="color:crimson; font-size: 20px;" for="Check-out:">Check-out</label>
        <input type="date" name="Check-out">
        
        <input type="submit" value="search">

        <?php
            echo "<br>"; 
            echo "<p style = 'color: crimson; text-align: center; font-size: 25px'>The dates aren't available please try again</p><br>";
        ?>

</body>
</html>