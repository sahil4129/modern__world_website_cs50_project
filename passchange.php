<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password Change</title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<?php
  require_once("main upper.php"); 
?>
<div class="cen">
    <div  class="cen2">
    <center><h2>User login </h2></center>
    <br/>
        <div class="w3-content w3-section" style="max-width:1200px">
      <img class="mySlides w3-animate-fading" src="pics/Nordic-Semiconductor-introduces-secure-and-signed-over-the-air-firmware-updates-in-latest-nRF5-SDK-to-help-improve-device-security.jpg" style="width:1124px;height:450px;border-radius:30px;">
    </div>
    <br />
    <br />
    <?php
    
        include('connect.php');
    
        $ii = $_REQUEST['p'];
         
        $ab=mysqli_query($conn,"select * from users where sno='$ii'") or die(mysql_error());
        
        $row = mysqli_fetch_array($ab);
        $dbpass = $row['password'];
        
        
        if(isset($_POST['sub']))
        {
            $c  = $_POST['pass'];
            $n  = $_POST['newpass1'];
            $np = $_POST['newpass2'];
            
            if($c!=$dbpass)
            {
                echo "Current Password Not Match..";
            }
            else if($n!=$np)
            {
                echo "New Passwords Not Match..";
            }
            else
            {
                mysqli_query("update users SET password='$n' where sno='$ii'") or die(mysql_error());
                
                echo "Password Changed.. <a href='logout.php'>Logout Id..</a>";
            }
        }
    ?>
    <center><h2>Change Password</h2></center><Br />
        <form action="" method="post">
          Current Password <br />
         <input type="password"   name="pass"/><br />
         New Password</br>
         <input type="password" name="newpass1" />
         <br />
         Retype New Password<br />
         <input type="password" name="newpass2" /><br /><br />
         <input type="submit" value="Update Password"  name="sub"/>
         
        </form>
        <br />
        <br />
    </div>
</div>
 <?php
  require_once("foot.php"); 
 ?>
  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>
</body>
</html>
