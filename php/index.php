<?php 
            session_start();
          	require "connection.php";
            
        //Fonction pour traiter les INPUT
            function check($var){
              $var=trim($var);
              $var=strip_tags($var);
              $var=stripslashes($var);
              if(empty($var)) return false;
              else return $var;
          }
          
        //Variables contenant les input  
             $city="";
             $yearr=0;
             $day=0;
             $pwd="";
             $email="";
             $naeme="";
             $monhth=0;

        //Variables contenant les messages d erreur
             $nameerr="";
             $Emailerr="";
             $dayerr="";
             $gendererr="";
             $pwderr="";

             if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Controle nom complet
              if(empty($_POST["FirstnameInput"])){
                $nameerr="*Champ obligatoire";    
            } else {
                $naeme=check($_POST["FirstnameInput"]);
                if(!preg_match("/^[a-zA-Z]*$/",$naeme)){
                    $nameerr="*chiffres et symboles non autorise";
                } else if(strlen($naeme)>20){
                    $nameerr="*Nom trop long";
                }
            }
             
       //Controle email
              if(empty($_POST["EmailInput"])){
                $Emailerr="*Champ obligatoire";    
              } else {
                $email=check($_POST["EmailInput"]);
               if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $Emailerr="*Email invalid";
                }
              }
       
       //Controle mot de passe
            if(empty($_POST["PwdInput"])){
              $pwderr="*Champ obligatoire";    
            } else {
              $pwd=$_POST["PwdInput"];
              if(strlen($pwd)<='8'){
                  $pwderr="*doit contenir en moins 8 char";
              } else if(!preg_match("#[0-9]+#",$pwd)){
                  $pwderr="*doit contenir en moins un chiffre";   
              } else if(!preg_match("#[A-Z]+#",$pwd)){
                  $pwderr="*doit contenir en moins une maj";
              } else if (!preg_match("#[a-z]+#",$pwd)){
                  $pwderr="*doit contenir en moins une minuscule";
             } 
           }

       //Controle DATE
              if(empty($_POST["BirthDayInput"]) || empty($_POST["BirthMonthInput"]) || empty($_POST["BirthYearInput"])){
                $dayerr="*Champ obligatoire";    
              } else {
                $day=check($_POST["BirthDayInput"]);
                $monhth=check($_POST["BirthMonthInput"]);
                $yearr=check($_POST["BirthYearInput"]);
              }

       //Controle gender
              if(empty($_POST["City"])){
                $gendererr="*Champ obligatoire";    
              } else {
                $city=$_POST["City"];
              }
            } 
          ?>

<!DOCTYPE html>
<html>
  <head>
    <title> MaCapsule</title>
    <meta charset="UTF-8">
    <meta name="description" content="Capsule hotels morocco.">
    <link rel="stylesheet" href="../css/index1.css">
    <script type="text/javascript" src="../javascript/index3.js"></script>
    <link rel="stylesheet" href="../css/w3.css">

  </head>
         <!-- NAV BAR -->  
  <body>
        <div id="image1">
          <div id="nav1" style="z-index: 999999;">
             <a href="index.php"><img src="../image/logo.png" id="imgnav" class="nav1txt" style="margin-top: -10px;margin-right: 490px;width:130px;height:130px;background-color:rgba(116, 95, 88, 0.399);border-radius:40px; "></a>
             <a href="index.php" class="linkNav"><p id="a1" class="nav1txt">Home</p></a>
             <a href="Explore.php" class="linkNav"><p id="a2" class="nav1txt">    Explore</p></a>
             <a href="About.php" class="linkNav"><p id="a3" class="nav1txt">    About us</p></a>
             <a href="Contact.php" class="linkNav"><p id="a4" class="nav1txt">    Contact</p></a>
             <button id="navButton">Book Now</button>

             <!-- POP UP SIGN IN  --> 
             <div id="myModal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <p id="ModelTxt1">Sign in</p>
                <form action="#" method="POST">
                  <table id="FormTable1" style="margin-left: 50px;margin-top: 20px;">
                    <tr>
                      <td colspan="2">
                        <label class="InputLabels" style="font-size: 20px;color:darkslategrey;">Account:</label>
                      </td>
                    </tr>
                       <tr>
                         <td class="TdInput" >
                           <input type="text" style="margin-top: 10px;"name="EmailInputLOG" id="EmaiilInputLOG" class="Inputs" placeholder="Email Adress" style="margin-bottom: 30px;">
                           <img src="../image/mail.png" style="position: absolute;width:20px;height: 20px;margin-left: -260px;margin-top: 21px;">
                           <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 69px;margin-top: -31px;"></div>
                         </td>
                       </tr>
                      <tr>
                        <td class="TdInput">
                         <input type="password" name="PwdInputLOG" id="PwddInputLOG" style="margin-top: 40px;margin-bottom: 10px;" placeholder="Password" class="Inputs" style="margin-bottom: 30px;">
                         <img src="../image/pwd.png" style="position: absolute;width:20px;height: 20px;margin-left: -260px;margin-top: 49px;">
                           <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 69px;margin-top: -41px;"></div>
                        </td>
                      </tr>  

             <!-- TEST DE CONNECTION AU SITE !! -->
                      <?php 
                      
                      if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $email=$_POST['EmailInputLOG'];
                        $password=$_POST['PwdInputLOG'];
                        $sql="SELECT * FROM lesclient where emaill='$email' AND pwd='$password'";
                        $run=mysqli_query($connection,$sql);
                        if($rows=mysqli_fetch_array($run)){echo "logged";
                          $_SESSION['EmailInputLOG'] = $email; 
                          $_SESSION['PwdInputLOG'] = $password; 
                        header("location:BookNow.php");
                        } else {
                            echo "<br><p style='font-size:14px;margin-top:10px;color:palevioletred;margin-top:210px;position:absolute;margin-left:70px;'>Your Login Name or Password is invalid</p>";
                    }
                } 
                      ?>

                       <tr>
                         <td colspan="2">
                           <input style="margin-top: 45px;margin-left: 40px;" type="submit" value="Log in" id="SubmitInput">
                         </td>
                       </tr>
                  </table>
                </form>
              </div>
             </div>   
          <script>
            //EVENEMENT DU POP AVEC JAVASCRIPT
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("navButton");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
              modal.style.display = "block";
            }
            span.onclick = function() {
              modal.style.display = "none";
            }
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          </script>
          </div>
          
          <!-- BIIG OPENING IMAGE -->
          <div id="openingDiv1">         
             <p id="openingTxt1">MaCapsule</p>
             <div id="openingSep1"></div>
             <p id="openingTxt2">The famous korean capsule hotels<br> are coming to Morocco.
              <br>Get a quick look and<br> become the first one to try it.</p>
             <a href="Explore.php"><button class="openingButton">Explore</button></a>
             <a href="BookNow.php"><button class="openingButton" style="margin-left: 30px;">Book</button></a>
            
          </div>
          <div id="Box1">
            <div id="sepBox1"></div>
            <p id="Box1txt1" >About</p>
            <p id="Box1txt2">Capsule hotels are one humankind best inventions
               and <b><i>MaCapsule</i></b> is no different you will be able to experience 
               the same exact sentations as in a koren capsule hotel .<br>
               As well as the privacy hygiene factor, our hotel equiped 
               with its own personal bathrooms and a fully installed cafe. </p> 
          </div>
      </div> 
      <div class="BigSep"></div>

      <!-- SIGN UP FORM PLUS AN IMAGE  -->
      <div id="image2">
          <div id="formDiv1">
            <div id="sepBox2"></div>
            <p class="formDiv1txt">Register for free</p>
            <?php 

              //SQL QUERY INSERT
           if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($Emailerr=="" OR $nameerr=="" OR $dayerr=="" OR $gendererr=="" OR $pwderr==""){
              $sql="INSERT INTO lesclient(namee,emaill,pwd,dayy,monthh,yearr,genderr) VALUES ('$naeme','$email','$pwd','$day','$monhth','$yearr','$city')";
              $result=mysqli_query($connection,$sql); 
              if($result){ 
                 echo "<p style='margin-right:350px;font-size:20px;color:rgb(43, 85, 87);margin-top:350px;background-color:rgba(67, 100, 134, 0.304);padding:4px;border-radius:10px;margin-left:120px;position:absolute;'>registration complete ";
                }
               else {
                  echo "error".$sql."<br>".mysqli_error($connection);
                  }
                }
              }
                mysqli_close($connection);
                      ?>

                   <!-- SQL FORM  -->   
            <form action="#" method="POST">
              <table id="FormTable1">
                <tr>
                  <td colspan="2">
                    <label class="InputLabels" style="font-size: 20px;color:darkslategrey;">Account:</label>
                  </td>
                </tr>
                   <tr>   
                     <td class="TdInput">
                       <input type="text" id="FirstnameInput" name="FirstnameInput" class="Inputs" placeholder="Full Name" style="margin-bottom: 30px;"> 
                       <img src="../image/user.png" style="position: absolute;width:20px;height: 20px;margin-left: -260px;margin-top: 20px;z-index: -1;">
                       <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 69px;margin-top: -61.5px;z-index: -1;"></div>
                       <pre style="margin-top:-20px">       <?php echo $nameerr; ?></pre>
                     </td>
                     <td class="TdInput">
                       <input type="text" id="EmailInput" name="EmailInput" class="Inputs" placeholder="Email Adress" style="margin-bottom: 30px;">
                       <img src="../image/mail.png" style="position: absolute;width:20px;height: 20px;margin-left: -260px;margin-top: 20px;z-index: -1;">
                       <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 69px;margin-top: -61.5px;z-index: -1;"></div>
                       <pre style="margin-top:-20px">       <?php echo $Emailerr; ?></pre>
                     </td>
                   </tr>
                  <tr>
                    <td class="TdInput">
                     <input type="password" id="PwdInput" name="PwdInput" placeholder="Password" class="Inputs" style="margin-bottom: 30px;">
                     <img src="../image/pwd.png" style="position: absolute;width:20px;height: 20px;margin-left: -260px;margin-top: 20px;z-index: -1;">
                     <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 69px;margin-top: -61.5px;z-index: -1;"></div>
                     <pre style="margin-top:-20px">       <?php echo $pwderr; ?></pre>
                    </td>
                  </tr>  
                  <tr>
                    <td>
                      <label class="InputLabels" style="font-size: 20px;color:darkslategrey;">Date of Birth:</label>
                    </td>
                    <td>
                      <label class="InputLabels" style="font-size: 20px;color:darkslategrey;">Gender:</label>
                    </td>
                  </tr>
                   <tr>
                     <td class="TdInput" style="display: inline-flex;">  
                      <input type="text" id="BirthDayInput" name="BirthDayInput" placeholder="DD" class="Inputs" style="margin-bottom: 30px;width: 55px;height: 38px;padding-left: 12px;">
                      <input type="text" id="BirthMonthInput" name="BirthMonthInput" placeholder="MM"class="Inputs" style="margin-bottom: 30px;width: 55px;height: 38px;padding-left: 12px;margin-left: 10px;">
                      <input type="text" id="BirthYearInput" name="BirthYearInput" placeholder="YYYY"class="Inputs" style="margin-bottom: 30px;width: 85px;height: 38px;padding-left: 12px;margin-left: 10px;">
                     </td>
                     <td class="TdInput">
                      <select id="City" class="Inputs" name="City" style="margin-bottom: 30px;height: 40px;width: 270px;">
                        <option selected disabled>Select:</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                      <img src="../image/gend.png" style="position: absolute;width:25px;height: 25px;margin-left: -260px;margin-top: 16px;z-index: -1;">
                       <div style="width: 2px;height: 25px;position: absolute;background-color: rgb(73, 71, 71);border-radius: 30%;margin-left: 69px;margin-top: -61.5px;z-index: -1;"></div>
                         
                     <tr>
                       <td>
                     <pre style="margin-top:-20px">       <?php echo $dayerr; ?></pre>
                       </td>
                       <td>
                       <pre style="margin-top:-20px">       <?php echo $gendererr; ?></pre>
                      </td>
                     </tr>
                      </td>
                   </tr>
                   <tr>
                     <td colspan="2">
                       <input type="submit" value="Register" id="SubmitInput1">
                     </td>
                   </tr>
                      
              </table>
            </form>
          </div>
          
          <img src="../image/capsule6.jpg" id="imgDiv">
      </div>
      <div class="BigSep"></div>

      <!-- SLIDE SHOW STRUCTURES CAPSULE  -->
      <div id="image3">
       <div id="ColorDiv"> 
        <div id="sepBox3"></div>
        <p id="infoTxt1">Have a look on our services and structures.</p>
        <div class="slideshow-container" style="width:600px;margin-left: 100px;margin-top: 60px;">
          <div class="mySlides fade">
            <img src="../image/capsule8.jpg" style="width: 600px;height: 400px;z-index: -115;">
            <div class="slideText">
              <p class="titleText1">
               Bath:
              </p>
              <p class="textText1">
               Our hotel is the first of his kind in Morocco, so people would be coming from all over the country ,and in order to help them take off their 
                travelling stress and exhaustment, we made a bath which for sure has running hot water, in addition to a bathrobe found in your locket.
              </p>
            </div>
          </div>
        </div>  
          <div class="mySlides fade" style="margin-left: 100px;">
            <img src="../image/capsule3.jpg" style="width: 600px;height: 400px;">
            <div class="slideText">
              <p class="titleText1">
               Workplace:
              </p>
              <p class="textText1">
               We all know that the capsules are not too spacious so for that we made a workplace for you, it has too many plugs for your devices as 
                well as some tables.
              </p>
            </div>
          </div>
          <div class="mySlides fade" style="margin-left: 100px;display:block;">
            <img src="../image/capsule7.jpg" style="width: 600px;height: 400px;">
            <div class="slideText">
              <p class="titleText1">
               Cafe place:
              </p>
              <p class="textText1">
               Us moroccans know the affectation we have for cafe shops, so we tried to implement a cafe place inside the hotels, it has its own workers
               to bring you the best experience possible.
              </p>
            </div>
          </div>
          <a class="prev" onclick="plusSlides(-1)" style="margin-top: 1300px;color:white;margin-left: 100px;">&#10094;</a>
          <a class="next" onclick="plusSlides(1)" style="margin-top: 1300px;margin-right: 720px;color: white;">&#10095;</a>
          </div>
          <br>
          <div style="margin-left: 430px;margin-top: -10px;">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
      </div>
      <div class="BigSep"></div>

      <!-- FOOTER CONTACT US .... -->
      <div id="image4">
        <a href=""><img src="../image/fb.png" style="width: 50px;height: 50px;margin-left: 570px;margin-top: 70px;"></a>
        <a href=""><img src="../image/ig.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <a href=""><img src="../image/print.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <a href=""><img src="../image/link.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <a href=""><img src="../image/tweet.png" style="width: 50px;height: 50px;margin-left: 20px;margin-top: 70px;"></a>
        <div style="display: inline-flex;">
          <a href="#" style="text-decoration: none;"><p class="footerTxt" style="margin-left: 500px;">Home</p></a>
          <a href="Explore.php" style="text-decoration: none;"><p class="footerTxt">Explore</p></a>
          <a href="BookNow.php" style="text-decoration: none;"><p class="footerTxt">Book now</p></a>
          <a href="About.php" style="text-decoration: none;"><p class="footerTxt">About us</p></a>
          <a href="Contact.php" style="text-decoration: none;"><p class="footerTxt">Contact</p></a>
        </div>
        <p style="margin-left: 660px;font-family: cursive;font-size: 16px;">MaCapsule 	&#169 2021</p>
      </div>
  </body>
</html>