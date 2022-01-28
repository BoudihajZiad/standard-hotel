<?php 
  session_start();
  require "connection.php";
  
  $_SESSION["EmailInputLOG"] = "";
  $_SESSION["PwdInputLOG"] = "";
  
  session_destroy();
  $_COOKIE["log"]="";
  header("location:index.php");
?>