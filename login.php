
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Membership form </title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<?php
  require_once("main upper.php"); 
if(!isset($_SESSION['user_name']) && !isset($_SESSION['user_id']))
{ 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<body>
<?php
require_once("main upper.php");
if(isset($_POST['sub']))
{
			include('connect.php');

		$u=  $_POST['user'];		
		$p=  $_POST['pass'];
		
		$ab= mysqli_query( $conn,"select * from users where username='$u' and password='$p'");	
		
		$nn = mysqli_num_rows($ab); //   It returns the number of selected rows
		
		if($nn==0)
		{
			echo "<h3 style='color:red;'>Invalid Username/Password</h3>";
		}
		else
		{
			$row = mysqli_fetch_array($ab);
			
			$_SESSION['user_name']=  $row['username'];
			$_SESSION['user_id']=  $row['sno'];
			
			header("location:submit.php");
		}
}
?>
<div class="cen">
<div class="cen2">
<br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/login.jpg" style="width:1124px;height:350px;border-radius:30px;"></div>
<br />  <center>
<h2>Login</h2></center>
<br />
<form action="" method="post">
<h3>Username </h3>
<input type="text" name="user" required="required" />&nbsp;&nbsp;&nbsp;
<h3>Password</h3>
<input type="password" name="pass" required="required" /><br /><br />
<input type="submit" name="sub" value="Login"/>
</form>
<br />
<br />
</div>
</div>
<?php
}
else
{
	header("location:submit.php");
}
   require_once("foot.php");  
 ?>
</body>
</html>