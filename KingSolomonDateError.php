<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>King Solomon Hotel</title>
    <link rel="stylesheet" href="../CSS/KingSolomonHotel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body
      {
          overflow-y: hidden;
          overflow-x: hidden;
      }
  </style>
    </head>
       <body>
        <h1 >King Solomon Hotel</h1>
        <h3 style="text-align: center; color: goldenrod;">for more info please call: 08-636-3444 </h3>
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
                <strong><a href="../Video/Isrotel King Solomon Hotel, Eilat, Israel+.mp4"><li>Virtual tour</li></a></strong>
              </ul>
            </div>
          </nav>
        <form style="margin-top: 220px; margin-left: 0px; text-align: center; " method="POST" action="../PHP/KingSolomonSaveDate.php">
        <label  style="color: goldenrod; font-size: 20px;" for="Check-in:">Check-in</label>
        <input type="date" name="Check-in">
        <label style="color:goldenrod; font-size: 20px;" for="Check-out:">Check-out</label>
        <input type="date" name="Check-out">
        <input type="submit" value="search">
        </form>
        <?php
            echo "<br>"; 
            echo "<p style ='color: goldenrod; text-align: center; font-size: 25px';>The dates aren't available please try again</p><br>";
        ?>
</body>
</html>
