<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Herods Hotel</title>
    <link rel="stylesheet" href="../CSS/HerodsHotel.css">
    <style>
      body
      {
          overflow-y: hidden;
          overflow-x: hidden;
      }
  </style>
</head>
<body>
    <h1 >Herods Hotel</h1>
    <h3 style="text-align: center; color: crimson;">for more info please call: 03-521-6666</h3>
    <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <strong><a href="../HTML/VacationTime.html"><li>home</li></a></strong>
            <strong><a href="../HTML/RentCar.html"><li>rent a car</li></a></strong>
            <strong><a href="../PHP/OpinionRatingOrigin.php"><li>ratingOpinion</li></a></strong>
            <strong><a href="../Video/Herods Tel Aviv By The Beach, Tel Aviv, Israel.mp4"><li>Virtual tour</li></a></strong>
          </ul>
        </div>
      </nav>
      <form style="margin-top: 220px; margin-left: 0px; text-align: center; font-family: 'Poppins', sans-serif;
         "method="POST" action="../PHP/HerodsSaveDate.php">
        <label  style="  color: crimson; font-size: 20px;" for="Check-in:">Check-in</label>
        <input type="date" name="Check-in">
        <label style=" color:crimson; font-size: 20px;" for="Check-out:">Check-out</label>
        <input type="date" name="Check-out">
        <input type="submit" value="search">
        </form>
        <?php
            echo "<br>"; 
            echo "<p style = 'color: crimson; font-size: 25px;text-align:center;'>The dates aren't available please try again</p><br>";
        ?>
</body>
