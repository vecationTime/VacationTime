<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Payment.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <div class="wrapper">
        <h2>VacationTime Payment page</h2>
        <form method="POST" action="../PHP/Payment.php"> 
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="ID" required class="name" name="ID">
                 </div>

                <div class="input-box">
                   <input type="text" placeholder="FirstName" required class="name" name="FirstName">
                </div>
            </div>

            <div class="input-box">
                <div class="input-box">
                    <input type="text" placeholder="LastName" required class="name" name="LastName">
                    
                </div>
            </div>
            
           <div class="input-group">
               <div class="input-box">
                    <input type="email" placeholder="Email Address" required class="name" name="Mail">
               </div>
           </div> 

           <div class="input-group">
               <div class="input-box">
                    <h4>Date of Birth</h4>
                    <input type="date" name="BirthDate">
               </div>
           </div>

           <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa-cc-visa"></i>Credit card</span></label>
                </div>
           </div>
            
           <div class="input-group">
            <div class="input-box">
                 <input type="text" placeholder="Card Number" required class="name" name="CardNumber"> 
                 <input type="text" placeholder="Expiration Date" required class="name" name="ExpirationDate"> 
                 <input type="text" placeholder="CVC" required class="name" name="CVC"> 
            </div> 
         </div>
         
         <input type="submit" value="Pay">
        </form>

        <?php
            echo "<br>"; 
            echo "<p style = 'color: royalblue; text-align: center; font-size: 25px'>Payment failed. please try again</p><br>";
        ?>
    </div>
</body>
</html>
