<?php
session_start();

if(isset($_SESSION['user_name'])&& isset($_SESSION['user_id']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit Information </title>
</head>
<body>

<?php
  require_once("main upper.php"); 
  if(isset($_POST['submit']))
{
	include("connect.php");
	$name = $_POST['name'];
	$email    = $_POST['email'];
	$cate   = $_POST['cate'];
	$subcate = $_POST['subcate'];
	$text =$_POST['reason'];
	$sql = "INSERT INTO  catagory(name,email,category,subcategory,text) values('$name','$email','$cate','$subcate','$text')" or die();
	mysqli_query($conn,$sql);
	
	if(isset($_REQUEST['p']))
		{
			$ii = $_REQUEST['p'];
			if($ii=="logout")
			{
				include("logout.php");
			}
			else if($ii=="passchange")
			{
				include("passchange.php");
			}
	  }}
?>
	
?>
<div class="cen">

	<div class="cen2">
<center>
       <br />
       <h2>Submit Information</h2></center>
       <br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/star-formation-and-ism-header.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/romulus25_3panel.png" style="width:1124px;height:350px;border-radius:30px;">  
</div>
<br />
<div style="float:left" >
        <form action="" method="post" enctype="multipart/form-data">
        <a href="passchange.php?p=<?php echo $_SESSION['user_id'];?>" style="text-decoration:none">
        <input type="button" name="changepass" value="Change Password" style="width:200px;height:30px;border-radius:10px;" /></a>
        <a href="logout.php" style="text-decoration:none"><input type="button" name="logout" value="Logout" style="width:200px;height:30px; border-radius:10px;"/></a>
        </form>
        </div>
<center><h2> Welcome , &nbsp;<?php echo $_SESSION['user_name'];?></h2></center><br />
       <br />
       <br />
<h2>New Submission</h2><br />
<form action="" method="post" enctype="multipart/form-data">
    Name <br />
    <input type="text" name="name" required="required"style="background-color:#F5F5F5" /><br />
   
     Email<br />
    <input type="email" name="email"required="required" style="background-color:#F5F5F5"/><br /> 
     Category<br />
    <select name="cate" required="required"style="background-color:#F5F5F5">
    <option>Select</option>
    <option value="Technology">Technology</option>
     <option value="Astronomy">Astronomy</option>
      <option value="Medical">Medical</option>
       <option value="Researches" >Researches</option>
    </select><br /><br />
     Sub- Category <br />
     <input type="text" name="sub-cate" required="required"style="background-color:#F5F5F5"><br /><br />
    <h4>Details</h4><br />
    <textarea style="width:700px; height:300px;background-color:#F5F5F5"name="reason" required="required"></textarea><br /><br />
    <input type="submit" name="submit"style="width:90px; height:50px; border-radius:20px;"/>
    </form>
<br />
</div>
</div>
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
<?php
  require_once("foot.php"); 
 ?>
<?php
}

else
{
	header("location:login.php");
}

?>