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
    <link rel="stylesheet" href="../css/Contact.css">
    <script type="text/javascript" src="../javascript/Contact.js"></script>
  </head>
  <body>
   <div id="image1">
        <div id="nav1">
           <a href="index.php"><img src="../image/logo.png" id="imgnav" class="nav1txt" style="margin-top: -10px;margin-right: 560px;width:120px;height:120px;border-radius:40px; "></a>
           <a href="index.php" class="linkNav"><p id="a1" class="nav1txt"><b>Home</b></p></a>
           <a href="Explore.php" class="linkNav"><p id="a2" class="nav1txt"><b>    Explore</b></p></a>
           <a href="#" class="linkNav"><p id="a3" class="nav1txt"><b>    About us</b></p></a>
           <a href="#" class="linkNav"><p id="a4" class="nav1txt"><b>    Contact</b></p></a>
           <div class="BigSep" id="SepNav" style="position: absolute;margin-top: 100px;background-color: rgba(0, 0, 0, 0);
           "></div>
        </div>
        <div id="openingDiv1">
          <p id="openingTxt1">We'd love to hear from you</p>
            <p id="openingTxt2"> 
               Whether you have a question about features, trials, pricing, or anything else,<br>our team is ready to answer all your questions.
            </p>
            <a href="#image2"><button id="touch">Get in touch</button></a>
         </p>
        </div>
    </div>
    <div class="BigSep"></div>

    <div id="image2">
        <div id="trait"></div>
        <p class="arttxt1">
          Get in touch
        </p>
         <div class="art1">
            <form action="#" method="POST">
                    <label class="InputLabels" style="font-size: 20px;color:darkslategrey;margin-top: 40px;position: absolute;">Name:</label>
                      <input type="text" style="margin-top: 30px;margin-left: 150px;position: absolute;" class="Inputs" placeholder="Name" style="margin-bottom: 30px;">
                    <label class="InputLabels" style="font-size: 20px;color:darkslategrey;position: absolute;margin-top: 120px;">Email:</label>
                      <input type="text" style="margin-top: 110px;margin-left:150px;margin-bottom: 10px;position: absolute;" placeholder="Email adress" class="Inputs" style="margin-bottom: 30px;">
                    <label class="InputLabels" style="font-size: 20px;color:darkslategrey;position: absolute;margin-top: 200px;">Message:</label>
                      <textarea style="margin-top: 195px;margin-left:150px;margin-bottom: 10px;position: absolute;padding: 10px;" rows="6" cols="50" placeholder="Password" id="textare" style="margin-bottom: 30px;"></textarea>
                        <input style="margin-top: 360px;margin-left: 180px;position: absolute;" type="submit" value="Send message" id="SubmitInput">
              </form>
              <img src="../image/cont.jpg" style="width: 350px;height: 350px;margin-left: 750px;margin-top:20px;border-radius: 10px;border: 2px solid rgba(0, 0, 0, 0.745);">
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

