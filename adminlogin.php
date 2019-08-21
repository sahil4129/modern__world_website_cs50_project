<?php
session_start();

if(!isset($_SESSION['admin_name']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
</head>

<body>

<h2>Admin Login</h2>

<?php
if(isset($_POST['sub']))
{
			include('connect.php');

		$u=  $_POST['user'];		
		$p=  $_POST['pass'];
		
		$ab= mysqli_query( $conn,"select * from  admin where username='$u' and password='$p'");	
		
		$nn = mysqli_num_rows($ab); //   It returns the number of selected rows
		
		if($nn==0)
		{
			echo "<h3 style='color:red;'>Invalid Username/Password</h3>";
		}
		else
		{
			$row = mysqli_fetch_array($ab);
			
			$_SESSION['admin_name']=  $row['username'];
			$_SESSION['admin_id']=  $row['id'];
			
			header("location:dashboard.php");
		}
}
?>
<form action="" method="post">
Username <br />
<input type="text" name="user" required="required" /><br />
Password <br />
<input type="password" name="pass" required="required" /><br /><br />

<input type="submit" name="sub" value="Login" />
</form>

</body>
</html>

<?php
}
else
{
	header("location:dashboard.php");
}
?>