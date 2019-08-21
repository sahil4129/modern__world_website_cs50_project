<?php
session_start();

if(isset($_SESSION['admin_name']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<?php
  require_once("main upper.php"); 
?>
<div class="cen2"> 
    <div class="cen" >
            <center> <h1>Admin Panel</h1>
            <br />
            <br />
            </center>
            <br />
             </div>
            
            <div style="float:right ; margin-top:80px;">
               <form>
               <a href="dashboard.php">
                <input type="button" value="Back" style="width:150px; height:30px;" /></a><br /><br />
               </form>
            </div>
            <div>
        <h3 align="center">Feedbacks</h3><br />
    <table border="2" bordercolor="#000000" align="center" cellspacing="2">
      	 <tr >
         <td> ID </td>
         <td> Name</td>  
         <td>Gender</td>
         <td>Email</td>
         <td>Message</td>
          <td>Action</td>
              <?php
	 include("connect.php");
	$ab = mysqli_query($conn,"select * from message") or die(mysql_error());	
	   while ($row = mysqli_fetch_array($ab))
	   {     
      ?>
         
         
        <tr>
        <td> <?php echo $row['sno'];?> </td>
        <td> <?php echo $row['name'];?> </td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['message'];?></td>
       <td colspan="2"> <center><a href="deletemsg.php?id=<?php echo $row['sno'];?>"><input type='button' value='Delete' name="ss">  </a></center><br />
              </tr>   
              
    <?php }?>     
     </table> 
           
            </div>
    </div>
<?php
}

else
{
	header("location:adminlogin.php");
}

?>
</body>
</html>