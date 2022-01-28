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
    <link rel="stylesheet" href="../css/Explore2.css">
    <link rel="stylesheet" href="../css/w3.css">
    <script type="text/javascript" src="../javascript/Explore2.js"></script>
  </head>
  <body>
   <div id="image1">
        <div id="nav1">
           <a href="index.php"><img src="../image/logo.png" id="imgnav" class="nav1txt" style="margin-top: -10px;margin-right: 560px;width:120px;height:120px;border-radius:40px; "></a>
           <a href="index.php" class="linkNav"><p id="a1" class="nav1txt">Home</p></a>
           <a href="Explore.php" class="linkNav"><p id="a2" class="nav1txt">    Explore</p></a>
           <a href="About.php" class="linkNav"><p id="a3" class="nav1txt">    About us</p></a>
           <a href="Contact.php" class="linkNav"><p id="a4" class="nav1txt">    Contact</p></a>
           <div class="BigSep" id="SepNav" style="position: absolute;margin-top: 100px;background-color: rgba(0, 0, 0, 0);
           "></div>
        </div>
        <div id="openingDiv1">
          <p id="openingTxt1">Discover a new universe</p>
          <p id="openingTxt2">Turning concepts into reality</p>
        </div>
    </div>
    
    <div>
        <div id="info1" style="nav-index: 2;">
            <p style="font-family:cursive;font-size: 30px;color: black;padding-left: 20px;">The best Experience</p>
            <hr style="width: 80%;background-color: black;border:1px solid black">
            <p style="font-family:cursive;font-size: 18px;padding-left: 14px;padding-top: 20px;">Live one of the best experiences possible with our set of capsule hotels !</p>
           <img src="../image/capsule4.jpg" id="infoimg1" style="z-index: 0;">
        </div>
        <div id="info2">
            <p style="font-family:cursive;font-size: 30px;color: black;padding-left: 20px;">The best quality of capsules</p>
            <hr style="width: 80%;background-color: black;border:1px solid black">
            <p style="font-family:cursive;font-size: 18px;padding-left: 14px;padding-top: 20px;">Our capsules are well equiped with a lot of features to improve your experience !</p>
          <img src="../image/capsule9.jpg" id="infoimg2" >
        </div>
    </div>
    <div class="BigSep"></div>

      <div id="image2">
        <div id="trait"></div>
        <p class="arttxt1">
          Hotel overview
        </p>
         <div class="art1">
            <p class="arttxt2">
              The hotel is located in Rabat the capital city of Morocco, and its built in a 4 floor building which has most of 
              the necessary structures you will need.<br><br>
              Our hotel is suitable for people who are in a business trip as well.<br><br> As people who just wanna discoer the world of capsule hotels
              and we can guarantee you that you will enjoy it. 
            </p>
         </div>       
         <div class="slideshow-container" style="width:600px;margin-left: 700px;margin-top: -380px;position: absolute;border-radius: 10px;">
          <div class="mySlides fade" style="margin-left: 100px;">
            <img src="../image/capsule5.jfif" style="width: 600px;height: 370px;z-index: -115;border-radius: 10px;">
          </div>
          <div class="mySlides fade" style="margin-left: 100px;">
            <img src="../image/capsule12.jpg" style="width: 600px;height: 370px;border-radius: 10px;">
          </div>
          <div class="mySlides fade" style="margin-left: 100px;display:block;">
            <img src="../image/capsule13.jpg" style="width: 600px;height: 370px;border-radius: 10px;">
          </div>
          <a class="prev" onclick="plusSlides(-1)" style="margin-top: -40px;color:white;margin-left: 100px;">&#10094;</a>
          <a class="next" onclick="plusSlides(1)" style="margin-top: -40px;margin-right: -100px;color: white;">&#10095;</a>
          <br>
          <div style="margin-left: 390px;margin-top: -10px;">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
        </div>
       </div> 
       <div class="BigSep"></div>

       <div id="image3" style="background-color:rgb(0,0,0,0.420)">
        <div id="trait"></div>
        <p class="arttxt1">
          Cafe Place
        </p>
        <div>
          <img src="../image/capsule7.jpg" style="width: 350px;height: 370px;margin-top:20px;position: absolute;margin-left:30px;border-radius:10px;border: black 2px inset;">
          <img src="../image/capsule10.jpg" style="width: 350px;height: 370px;margin-top:60px;position: absolute;margin-left:350px;border-radius:10px;border: black 2px inset;">
        </div>
         <div class="art1" style="margin-left:750px;">
            <p class="arttxt2">
              We know that moroccans love cafe shops, so for that reason we built the closest cafe shop for you so that you dont have to go 
              to some distant place to find one.<br><br>
              As you can see our cafe shop is well equipped, you can also take breakfast in it.<br><br> For that special we intend to give you
              a free breakfast for the first 3 days of your residence with us. 
            </p>
         </div>       
         <div class="">
            
         </div>
       </div> 

       <div class="BigSep"></div>
       <div id="image3">
        <div id="trait"></div>
        <p class="arttxt1">
          WorkPlace and PlayGround
        </p>
        <div>
          <img src="../image/capsule3.jpg" style="width: 350px;height: 370px;margin-top:20px;position: absolute;margin-left:30px;border-radius:10px;border: black 2px inset;">
          <img src="../image/capsule11.jpg" style="width: 350px;height: 370px;margin-top:60px;position: absolute;margin-left:350px;border-radius:10px;border: black 2px inset;">
        </div>
         <div class="art1" style="margin-left:750px;">
            <p class="arttxt2">
             Capsule hotels are too small to work in and we dont want you to suffer from back pain so made sure that our hotel has its own workplace,
             an area where you can study and focus without harming yourself.<br><br>
              There is also a play ground for those who wants to enjoy their stay in the hotel.<br><br> We have a console area in addition to 
              some games like 8pool and Baby foot. 
            </p>
         </div>       
         <div class="">
            
         </div>
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

