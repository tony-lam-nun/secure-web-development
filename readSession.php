<?php
ini_set("session.save_path", "0;644;/var/www/html/sessionData"); 
session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8" />
     <title>readSession/title>
 </head>
<body>
<?php 
     if (isset($_SESSION['firstname'])) {   
          echo $_SESSION['firstname'];    
     } 
     else {  
          echo "<p>Session not set</p>\n"; 
}    
?>

</body>
</html>