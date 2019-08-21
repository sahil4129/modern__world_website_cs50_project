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
          <h2>  Welcome:   <?php echo $_SESSION['admin_name']; ?></h2>
            </center>
            <br />
             </div>
            
            <div style="float:right ; margin-top:80px;">
               <form>
               <a href="showquery.php">
                <input type="button" value="Queries" style="width:150px; height:30px;" /></a><br /><br />
               <a href="showfeed.php"><input type="button" value="Feedbacks"  style="width:150px; height:30px;"/></a><br /><br />
               
               </form>
            </div>
            <div>
        <h3 align="center">Registered Users</h3><br />
    <table border="2" bordercolor="#000000" align="center" cellspacing="2">
      	 <tr >
         <td> ID </td>
         <td> Name</td>  
         <td> Username</td>
         <td>Gender</td>
         <td>Email</td>
         <td>D.O.B</td>
         <td>Social Link</td>
         <td>Pin-Code</td>
         <td>Address</td>
         <td>Reason</td>
         <td> Image</td>
        <td colspan="2"><center>Action</center></td>
              <?php
	 include("connect.php");
	$ab = mysqli_query($conn,"select * from users") or die(mysql_error());	
	   while ($row = mysqli_fetch_array($ab))
	   {     
      ?>
         
         
        <tr>
        <td> <?php echo $row['sno'];?> </td>
        <td> <?php echo $row['name'];?> </td>
        <td> <?php echo $row['username'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['link'];?></td>
        <td><?php echo $row['pin'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['reason'];?></td>
        <td> <img src="<?php echo $row['image'];?> "   width='100px' height='100px'/></td>
         
        
        <td colspan="2"> <center><a href="delete.php?id=<?php echo $row['sno'];?>"><input type='button' value='Delete' name="ss">  </a></center><br />
       <a href="show.php?id=<?php echo $row['email'];?>"><input type='button' value='Submit Information' name="ss">  </a></td>
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