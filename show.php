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
  $i = $_REQUEST['id'];
?>
<div class="cen2"> 
    <div class="cen" >
            <center> <h1>Admin Panel</h1>
            <br />
            <br />
            </center>
            <br />
            <div>
        <h2 align="center">Submit Information </h2><br />
    <table border="2" bordercolor="#000000" align="center" cellspacing="2">
      	 <tr >
         <td>Id </td>
         <td> Name</td>  
         <td>Email</td>
         <td>Category</td>
         <td>Sub-Category</td>
         <td>Information</td>
              <?php
	 include("connect.php");
	   $ab = mysqli_query($conn,"select * from catagory where email='$i'");
	   while ($row = mysqli_fetch_array($ab)) 
	   {     
      ?>
        <tr>
        <td> <?php echo $row['sno'];?> </td>
        <td> <?php echo $row['name'];?> </td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['category'];?></td>
        <td><?php echo $row['subcategory'];?></td>
        <td><?php echo $row['text'];?></td>
              </tr>   
              
    <?php }?>     
     </table> 
     <br />
     <br />
            </div>
            </div>
    </div>
<?php
 require_once("foot.php");
?>
</body>
</html>