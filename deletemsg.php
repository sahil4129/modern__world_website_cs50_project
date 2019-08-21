<?php
 include("connect.php");
 
 $i = $_REQUEST['id'];
  
  mysqli_query($conn,"delete from message where sno='$i'"); die(mysql_error());
   
     header("location : showquery.php");
?>