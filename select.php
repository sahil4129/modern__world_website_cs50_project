<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>

	<script>
	function ab(st)
	{
		if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
 	 }
	else
 	 {// code for IE6, IE5
 		 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	 }
	 
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
   			 document.getElementById("ct").innerHTML=xmlhttp.responseText;
   		 }
  	}
	
	xmlhttp.open("GET","selectcity.php?url="+st,true);
	xmlhttp.send();
	}
	</script>
</head>

<body>

<form>
	<select name="st" onchange="ab(this.value);">
    	<option>Catagory</option>
        <?php
			include('connect.php');
			$dd= mysqli_query($conn,"select * from catagory ") or die(mysql_error());

			while($row=mysqli_fetch_array($dd))
			{
				echo "<option>".$row['catagory']."</option>";
			}
			?>
?>

		?>>
    </select>
    
    <select name="ct" id="ct">
    	<option>Cities</option>
    </select>
</form>
</body>
</html>