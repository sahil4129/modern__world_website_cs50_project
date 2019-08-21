<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Membership form </title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<body>
<?php
  require_once("main upper.php"); 
  if(isset($_POST['submit']))
{
	include("connect.php");
	$name = $_POST['name'];
	$username  = $_POST['username'];
	$password= $_POST['password'];
	$gen= $_POST['gen'];
	$pin = $_POST['pin'];
	$address = $_POST['address'];
	$reason = $_POST['reason'];
	$email    = $_POST['email'];
	$dob   = $_POST['dob'];
	$link = $_POST['link'];
	$im   = $_FILES['img']['name'];
	$imgt = $_FILES['img']['tmp_name']; 	 
	$path= "images/$name/$username/$im"; 
	$sql = "INSERT INTO  users(name,username,gender,image,email,password,dob,link,pin,address,reason) values('$name','$username','$gen','$path','$email','$password','$dob','$link','$pin','$address','$reason')" or die();
	mysqli_query($conn,$sql);
	
     if (!is_dir("images"))
	        mkdir("images");
	
	if(!is_dir("images/$name"))
	{
		mkdir("images/$name");
		if(!is_dir("images/$name/$username"))
		{
			mkdir("images/$name/$username");
			move_uploaded_file("$imgt",$path);	
		}
		else
		{
			move_uploaded_file("$imgt",$path);
		}
	}
	else
	{
		if(!is_dir("images/$name/$username"))
		{
			mkdir("images/$name/$username");
			move_uploaded_file("$imgt",$path);	
		}
		else
		{
			move_uploaded_file("$imgt",$path);
		}
	}	
	 echo "Thanks for registration ,we will get back to you soon";
	 error_reporting(E_ALL);
}
?>
<div class="cen">
 <div class="cen2">
       <center>
       <br />
       <h2> Membership form </h2></center>
       
       <br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/DSI Membership Banner .png" style="width:1124px;height:280px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/membership-banner.jpg" style="width:1124px;height:280px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/membershipbanner.jpg" style="width:1124px;height:280px;border-radius:30px;">
</div>
  <br />
 <h3> You can also become a member,just fill the  below form we will get in touch with you shortly.... </h3><br />
  
  
  <form action="" method="post" enctype="multipart/form-data">
    Name <br />
    <input type="text" name="name" required="required" style="background-color:#F5F5F5"/><br />
    
     Username <br />
    <input type="text" name="username" required="required" style="background-color:#F5F5F5"/><br /><br />
    <div style="float:right" >
        <img src="pics/becomemember.jpg"  style="width:450px;height:320px;opacity:0.5"class="digi"/>
       </div>
    Gender <br />
    <input type="radio" name="gen" value="Male" style="background-color:#999" />Male
    <input type="radio" name="gen" value="Female" />Female <br /> <br />
    Upload profile pic <br />
    <input type="file" name="img" required="required" style="text-decoration:none" /><br /><br />
    
     Email <br />
    
    <input type="email" name="email" style="background-color:#F5F5F5"/><br />
    Password <br />
    <input type="password" name="password" required="required" style="background-color:#F5F5F5"/><br /><br />
    Date of Birth (dd/mm/yy) <br />
    <input type="text" name="dob" required="required"style="background-color:#F5F5F5" /><br /><br />
    Social profile link (fb/twitter/instagram/linedin) <br />
    <input type="text" name="link" required="required"style="background-color:#F5F5F5" /><br /><br />
    Pincode<br />
    <input type="text" name="pin" required="required" style="background-color:#F5F5F5"/><br /><br />
    Address <br />
    <textarea style="width:300px; height:100px;background-color:#F5F5F5"" name="address"></textarea><br /><br />
     
    <h4>Why should we hire you ?</h4> <br />
    <textarea style="width:300px; height:100px;background-color:#F5F5F5"" name="reason"></textarea><br /><br />
 <input type="submit" name="submit" style="width:90px; height:50px; margin-left:90px; border-radius:20px;"/>
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