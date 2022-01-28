<?php 
        session_start();
        require "connection.php";
       
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Book now</title>
    <meta charset="UTF-8">
    <meta name="description" content="Capsule hotels morocco.">
    <link rel="stylesheet" href="../css/About.css">
    <script type="text/javascript" src="../javascript/About.js"></script>
  </head>
  <body>
   <div id="image1">
        <div id="nav1">
           <a href="index.php"><img src="../image/logo.png" id="imgnav" class="nav1txt" style="margin-top: -10px;margin-right: 560px;width:120px;height:120px;border-radius:40px; "></a>
           <a href="index.php" class="linkNav"><p id="a1" class="nav1txt"><b>Home</b></p></a>
           <a href="Explore.php" class="linkNav"><p id="a2" class="nav1txt"><b>    Explore</b></p></a>
           <a href="#" class="linkNav"><p id="a3" class="nav1txt"><b>    About us</b></p></a>
           <a href="Contact.php" class="linkNav"><p id="a4" class="nav1txt"><b>    Contact</b></p></a>
           <div class="BigSep" id="SepNav" style="position: absolute;margin-top: 100px;background-color: rgba(0, 0, 0, 0);
           "></div>
        </div>
        <div id="openingDiv1">
          <p id="openingTxt1">About US</p>
          <p id="openingTxt2">At MaCapsule, we understand ones need to seperate from the world. A night out<br> in a tiny capsule for sure 
              imporves peoples ability to adapt to change. <br>At MaCapsule, we search for the quality and the satisfacetion of our 
              clients.<br> We guarantee you that you're going to have one of the best experiences with us.
          </p>
        </div>
    </div>
    <div class="BigSep"></div>

    <div id="image2">
        <div id="trait"></div>
        <p class="arttxt1">
          Our vision
        </p>
        <img src="../image/capsule14.jpg" style="width: 600px;margin-left:70px;margin-top:30px;border:2px rgba(0, 0, 0, 0.651) solid;border-radius:10px;height: 400px;position: absolute; ">
         <div class="art1">
            <p class="arttxt2">
              At MaCapsule, our biggest challenge is to assure the clients satisfaction.<br> Your feedback is the only way for us to improve. <br><br>
              We intend in the long term to add more structures and more hotels in different cities.<br><br> And as always we count on you
              to help us improve.
              <br><br><br><I>- MaCapsule team</I>  
            </p>
         </div>       
        
       </div> 
       <div class="BigSep"></div>
    

       </div> 
       <div class="BigSep"></div>
      <div id="image4">
        <a href=""><img src="../image/fb.png" style="width: 50px;height: 50px;margin-left: 570px;margin-top: 70px;"></a>
        <a href=""><img src="../image/ig.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <a href=""><img src="../image/print.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <a href=""><img src="../image/link.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <a href=""><img src="../image/tweet.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <div style="display: inline-flex;">
            <a href="index.php" style="text-decoration: none;"><p class="footerTxt" style="margin-left: 500px;">Home</p></a>
            <a href="Explore.php" style="text-decoration: none;"><p class="footerTxt">Explore</p></a>
            <a href="BookNow.php" style="text-decoration: none;"><p class="footerTxt">Book now</p></a>
            <a href="About.php" style="text-decoration: none;"><p class="footerTxt">About us</p></a>
            <a href="Contact.php" style="text-decoration: none;"><p class="footerTxt">Contact</p></a>
        </div>
        <p style="margin-left: 660px;font-family: cursive;font-size: 16px;">MaCapsule 	&#169 2021</p>
      </div>
  </body>
</html>

