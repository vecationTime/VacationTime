<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/ContactUs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        body
        {
            overflow-y: hidden;
            overflow-x: hidden;
        }
    </style>
</head>
<body >
    <div class="container">
        <header>
            <a href="../HTML/VacationTime.html"><button class="btn"><i class="fa fa-home"></i></button></a>
            <strong><h1 style="color: goldenrod">Contact Us VacationTime</h1></strong>
            <strong><p style="color: royalblue">For any problem you can send us a massage and we will reach you back</p></strong>
        </header>
        <div class="content">
            <div class="content-form">
                <section>
                    <i style="margin-left: 150px;" class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2 style="color: royalblue; margin-left: 150px;">address</h2>
                    <p style="color: royalblue; margin-left: 150px;">
                    Hapalmach 21 GanYavne.<br>
                    Shmuel Hanagid 13 Herzelia.<br>
                    </p></strong>
                </section>

                
                <section>
                    <i style="margin-left: 150px;" class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2 style="color: royalblue; margin-left: 150px;">Phone</h2>
                    <p style="color: royalblue; margin-left: 150px;">0544266643<br>
                    0525322828</p></strong>
                </section>

                <section>
                    <i style="margin-left: 150px;" class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2 style="color: royalblue; margin-left: 150px;">E-mail</h2>
                    <p style="color: royalblue; margin-left: 150px;">
                    king2667@gmail.com.<br>
                    sShakedi125@gmail.com.</p>
                </section>
            </div>
        </div>

      <form method="post" action="../PHP/messages.php" class="sign-up-form">
        <div class="form">
            <div class="right">
              <div class="contact-form">
                  <input style="color: crimson" type="text" required>
                  <span style="color: crimson">Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input style="color: crimson" type="E-mail" required>
                  <span style="color: crimson">E-mail</span>
              </div>

              <div class="contact-form">
                  <textarea style="color: crimson" name="text">
                  </textarea>
                  <span style="color: crimson"> Type your Message.... </span>
              </div>
  
              <div class="contact-form">
                  <input type="submit" input="submit">
              </div>
              </div>
            </div>
          </div>
    </form>
    </div>   
    
    <?php 
         echo "<p style = 'color: crimson; text-align: center; position: relative; top: -350px; left: 150px; font-size: 25px'>Error, please try again</p><br>";
         echo "<br>";
    ?>

</body>
</html>
