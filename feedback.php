<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<body>
<body>
<?php
  require_once("main upper.php"); 
  if(isset($_POST['submit']))
{
	include("connect.php");
	$name = $_POST['name'];
	$gen= $_POST['gen'];
	$email    = $_POST['email'];
	$que= $_POST['que'];
	$link = $_POST['link']; 
	$feedback = $_POST['feedback'];
	$sql = "INSERT INTO  queries(name,gender,email,que,link,feedback) values('$name','$gen','$email','$que','$link','$feedback')" or die();
	mysqli_query($conn,$sql);
	
     
	 echo "Thanks for giving your feedback ,we will get back to you soon";
	 error_reporting(E_ALL);
}
?>
<div class="cen">
  <div class="cen2">
       <br />
       <br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/Feedback-Page.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/CUSTOMER-feedback.jpg" style="height:350px;width:1124px;border-radius:30px;">
</div>
       <br />
       <br />
       <div style="float:right" >
        <br />
        <img src="pics/images (9).jpg" style=" width:259px;height:270px;opacity:0.5" class="digi" >
       </div>
  <h2> Feedback Form </h2><br />
<form action="" method="post" enctype="multipart/form-data">
    Name <br />
    <input type="text" name="name" required="required" style="background-color:#F5F5F5"/><br /><br />
    Gender <br />
    <input type="radio" name="gen" value="Male"style="background-color:#F5F5F5" />Male
    <input type="radio" name="gen" value="Female" />Female <br /> <br />    
     Email <br /> 
    <input type="email" name="email" style="background-color:#F5F5F5"/><br /><br />
    Have you register yourself ? <br />
    <input type="radio" name="que" value="Yes" style="background-color:#F5F5F5"/>Yes
    <input type="radio" name="que" value="No" />No<br /> <br />   
    Social profile link (fb/twitter/instagram/linedin) <br />
    <input type="text" name="link" required="required"style="background-color:#F5F5F5" /><br /><br />
    <h4>feedback or any Suggestion (max 255 char)</h4> <br />
    <textarea style="width:300px; height:100px;background-color:#F5F5F5" name="feedback"></textarea><br /><br />
    <input type="submit" name="submit" style="width:90px; height:50px;border-radius:20px;"/>
    </form>
    <br /><br />
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
    setTimeout(carousel, 2000);    
}
</script>

</body>
</html>