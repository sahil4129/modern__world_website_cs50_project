 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Launch Vechiles</title>
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
?>
<div class="cen">
  <div class="cen2">
       <center>
       <br />
       <h2> Launch Vechiles </h2></center><br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/Soyuz-Fregat_launch_vehicle_carrying_GIOVE-B.jpg" style="width:1124px;height:400px;border-radius:30px;">
</div>
<br />
 <img src="pics/silo_infograph_1.jpg" class = "lag" >
       <br />
       <h3> Launch Vechiles</h3>
       <p> In spaceflight, a launch vehicle or carrier rocket is a rocket used to carry a payload from Earth's surface into outer space. A launch system includes the launch vehicle, the launch pad, and other infrastructure.[1] Although a carrier rocket's payload is often an artificial satellite placed into orbit, some spaceflights, such as sounding rockets, are sub-orbital, while others enable spacecraft to escape Earth orbit entirely.</p>
       <a href ="https://en.wikipedia.org/wiki/Launch_vehicle" style="text-decoration:none">More Details..</a>
  <br />
  <br />
  <h3>Launch Vechiles by ISRO</h3>
  <p>Launchers or Launch Vehicles are used to carry spacecraft to space. India has two operational launchers: Polar Satellite Launch Vehicle (PSLV) and Geosynchronous Satellite Launch Vehicle (GSLV).</p>
  <a href="http://www.isro.gov.in/launchers" style="text-decoration:none">Check here...</a>
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
    setTimeout(carousel, 2000);    
}
</script>

</body>
</html>