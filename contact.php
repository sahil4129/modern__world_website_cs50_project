<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact us </title>
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
	$message = $_POST['message'];
	   $sql = "INSERT INTO  message(name,gender,email,message) values('$name','$gen','$email','$message')";
	 $conn->query($sql);
	 echo "Thanks for  Contacting us , we get back to you soon ";
}
?>
<div class="cen">
  <div class="cen2">
       <br />
       
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/contact_us.jpg" style="width:1124px;height:300px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/images (10).jpg" style="height:300px;width:1124px;border-radius:30px;">
</div>
<div style="float:right" >
        <br />
        <img src="pics/contactus.jpg" style=" width:259px;height:194px; border-radius:30px;opacity:0.5"  >
        <br />
        <h2>Connect with us:</h2>
        <br /><h4>Residence:</h4>
          <p> #729,Vedant nagar, link road,Moga(Punjab),India<br />
           Pincode- 142001</p>
           <br /><h4>Office:</h4>
          <p> Hostel-K , Thapar University, Bhadson Road, Patiala (Punjab),India<br />
           Pincode-147004<br /><br />
           Phone: 98145-70347<br />
           Email- s.g.navingoyal@gmail.com
           </p>
           
       </div>
       <br />
       
       <br />
       <h2>Contact us </h2>
       <br />
       <form action="" method="post" enctype="multipart/form-data">
    Name <br />
    <input type="text" name="name" required="required" style="background-color:#F5F5F5"/><br /><br />
    Gender <br />
    <input type="radio" name="gen" value="Male"style="background-color:#F5F5F5" />Male
    <input type="radio" name="gen" value="Female" />Female <br /> <br />
     Email <br />
    <input type="email" name="email"style="background-color:#F5F5F5" /><br /><br />
     
    <h4>Message</h4> <br />
    <textarea style="width:300px;background-color:#F5F5F5 height:100px;" name="message" style=""></textarea><br /><br />
    <input type="submit" name="submit"style="width:90px; height:50px; border-radius:20px;"/>
    </form>
        <br /> <br />
       <div>
       <div>
       <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA37cAIzULgmk74VhVU7K4x2ywR20ESMPs'></script><div style='overflow:hidden;height:400px;width:1124px;'><div id='gmap_canvas' style='height:400px;width:1124px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://dissertation-writingservice.com/'>https://dissertation-writingservice.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=2e4bcf2a7162c945df11be5de546f06061e09d6f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(30.3544381,76.36255269999992),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(30.3544381,76.36255269999992)});infowindow = new google.maps.InfoWindow({content:'<strong>Office </strong><br> Hostel-K, Thapar University ,Bhadson Road<br>147004 patiala<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
       </div>
       <br />
       <br />
       </div>
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