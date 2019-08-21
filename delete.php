<?php
 include("connect.php");
 
 $i = $_REQUEST['id'];
  
  mysqli_query($conn,"delete from users where sno='$i'"); die(mysql_error());
   
     header("location : dashboard.php");
?>