<?php 
        session_start();
        require "connection.php";
        
        if(isset($_SESSION['EmailInputLOG']) and isset($_SESSION['PwdInputLOG'])){
        setcookie('log',$_SESSION["EmailInputLOG"],time() + 1*24*3600);
        }
        if($_COOKIE['log'] != $_SESSION["EmailInputLOG"]){
          header("location:index.php");
        }

     
        function check($var){
          $var=trim($var);
          $var=strip_tags($var);
          $var=stripslashes($var);
          if(empty($var)) return false;
          else return $var;
      }
      
    //Variables contenant les input  
         $nb=0;
         $dateF=0;
         $dateT=0;
         $nbPpl=0;

    //Variables contenant les messages d erreur
         $nberr="";
         $dateFerr="";
         $dateTerr="";
         $nbPplerr="";

         if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Controle numero de telephone
          if(empty($_POST["telInput"])){
            $nberr="*Champ obligatoire";    
        } else {
            $nb=check($_POST["telInput"]);
        }
         
   //Controle date From
          if(empty($_POST["fromInput"])){
            $dateFerr="*Champ obligatoire";    
          } else {
            $dateF=check($_POST["fromInput"]);
          }

    //Controle date To
    if(empty($_POST["toInput"])){
      $dateTerr="*Champ obligatoire";    
    } else {
      $dateT=check($_POST["toInput"]);
    }

    //Controle number of ppl
    if(empty($_POST["PplInput"])){
      $nbPplerr="*Champ obligatoire";    
    } else {
      $nbPpl=check($_POST["PplInput"]);
    }
  
       }

  ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Book now</title>
    <meta charset="UTF-8">
    <meta name="description" content="Capsule hotels morocco.">
    <link rel="stylesheet" href="../css/BookNow1.css">
    <script type="text/javascript" src="../javascript/BookNow.js"></script>
  </head>
  <body>
      <div style="width: 350px;background-image: url('../image/texture.jpg');height: 838px;position: absolute;margin-top: 100px;"></div>
      <div style="width: 350px;background-image: url('../image/texture.jpg');height: 838px;position: absolute;margin-left: 1144px;margin-top: 100px;"></div>
    <div id="image1">
        <div id="nav1" style="z-index: 999999;">
           <a href="index.php"><img src="../image/logo.png" id="imgnav" class="nav1txt" style="margin-top: -10px;margin-right: 490px;width:120px;height:120px;border-radius:40px; "></a>
           <a href="index.php" class="linkNav"><p id="a1" class="nav1txt">Home</p></a>
           <a href="Explore.php" class="linkNav"><p id="a2" class="nav1txt">    Explore</p></a>
           <a href="About.php" class="linkNav"><p id="a3" class="nav1txt">    About us</p></a>
           <a href="Contact.php" class="linkNav"><p id="a4" class="nav1txt">    Contact</p></a>
           <a href="deconnexion.php"><button id="navButton">Log Out</button></a>
           <div class="BigSep" id="SepNav" style="position: absolute;margin-top: 100px;"></div>
        </div>
        <div id="formBook">
            <?php
            $sql = "SELECT namee FROM lesclient where emaill='$_SESSION[EmailInputLOG]' AND pwd='$_SESSION[PwdInputLOG]'";
            $result = mysqli_query($connection, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                ?>
              
            <div class="divStyle" ></div>
            <p id="Greetings">Welcome back <?php echo $row["namee"]; ?></p>
            <div class="divStyle" id="divStyle2" ></div>

            <?php
              }
            }
               ?>
            
            <div id="ActualForm">
              <p style="font-family:cursive;font-size: 25px;margin-left:40px;margin-top: 40px;">Book a Capsule</p>
              <hr style="margin-top: -20px;width: 650px;">
              <form action="#" method="POST">
                <table>
                  <tr >
                    <td style="width: 100px;">
                     <label class="InputLabels" for="telInput">Phone number:</label>
                    </td>
                    <td style="width: 100px;">
                      <input type="tel" class="Inputs" id="telInput" name="telInput">
                      <p style="position: absolute;font-size:20px;margin-left: 180px;margin-top: -34px;">+(212)</p>
                      <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 243px;margin-top: -34px;"></div>
                      <pre style="margin-top:3px;position:absolute;margin-left:150px;">       <?php echo $nberr; ?></pre>
                    </td>
                  </tr>
                  <tr >
                    <td style="width: 100px;">
                     <label class="InputLabels" for="fromInput">Date from:</label>
                    </td>
                    <td style="width: 100px;">
                      <input type="date" class="Inputs" id="fromInput" name="fromInput">
                      <img src="../image/date.png" style="position: absolute;width:25px;height: 25px;margin-left: -254px;margin-top: 40px;">
                      <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 226px;margin-top: -34px;"></div>                   
                      <pre style="margin-top:3px;position:absolute;margin-left:150px;">       <?php echo $dateFerr; ?></pre>
                    </td>
                  </tr>
                  <tr >
                    <td style="width: 100px;">
                     <label class="InputLabels" for="fromInput">Date to:</label>
                    </td>
                    <td style="width: 100px;">
                      <input type="date" class="Inputs" id="toInput" name="toInput">
                      <img src="../image/date.png" style="position: absolute;width:25px;height: 25px;margin-left: -254px;margin-top: 40px;">
                      <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 226px;margin-top: -34px;"></div>                   
                      <pre style="margin-top:3px;position:absolute;margin-left:150px;">       <?php echo $dateTerr; ?></pre>
                    </td>
                  </tr>
                  <tr >
                    <td style="width: 100px;">
                     <label class="InputLabels" for="fromInput">No of people:</label>
                    </td>
                    <td style="width: 100px;">
                      <input type="number" class="Inputs" id="PplInput" name="PplInput">
                      <img src="../image/user.png" style="position: absolute;width:25px;height: 25px;margin-left: -254px;margin-top: 40px;">
                      <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 226px;margin-top: -34px;"></div>                   
                      <pre style="margin-top:3px;position:absolute;margin-left:150px;">       <?php echo $nbPplerr; ?></pre>
                    </td>
                  </tr>
                  <hr style="margin-top: 350px;width: 650px;margin-left:20px;position: absolute;">
                  <tr>
                    <td colspan="2">
                      <input style="margin-top: 65px;margin-left: 240px;" type="submit" value="Book Now" id="SubmitInput">
                    </td>
                      <?php
                          //SQL QUERY INSERT
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                          if($nberr=="" OR $dateFerr=="" OR $dateTerr=="" OR $nbPplerr==""){
                            $sql="INSERT INTO booking(tel,dateF,dateT,nbPpl) VALUES ('$nb','$dateF','$dateT','$nbPpl')";
                            $result=mysqli_query($connection,$sql); 
                            if($result){ 
                              echo "<p style='margin-left:350px;font-size:20px;color:rgb(43, 85, 87);margin-top:380px;background-color:rgba(67, 100, 134, 0.504);padding:4px;border-radius:15px;margin-left:480px;position:absolute;'>reservation complete ";
                              }
                            else {
                                echo "error".$sql."<br>".mysqli_error($connection);
                                }
                              }
                            }
                              mysqli_close($connection);
                      ?>
                  </tr>
                </table>
              </form>
            </div>   
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

