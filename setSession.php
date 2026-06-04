<?php 
//NOTE: depending on your preferred setup, comment in/out the relevant lines below beginning ini_set
ini_set("session.save_path", "C:/xampp/htdocs/sessionData");  //adapt this to your own folder structure for xampp 
//ini_set("session.save_path", "/home/unn_w22042968/sessionData"); //adapt this is for newnumyspace username 
session_start(); 

?> 

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8" />
     <title>setSession</title>
 </head>
<body> 
 <?php
 $_SESSION['firstname'] = 'Tony';
   echo "\n<p>session has been set</p>\n";
   echo $_SESSION['firstname'];

 ?>
</body>
</html>



