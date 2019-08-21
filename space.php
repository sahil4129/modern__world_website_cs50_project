<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Space crafts</title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<body>
<?php
  require_once("main upper.php"); 
?>
<div class="cen">
  <div class="cen2">
       <center>
       <br />
       <h2>Space Crafts</h2></center>
  <br />
  <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/4647075-o_1bktgen9e1vl566mhsf1vdq1qe2c-fz_xjoDpK7ZBxA-thumbnail-full.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/679608main_IRIS-cutaway-orig_full.jpg" style="height:350px;width:1124px;border-radius:30px; opacity:0.7">
</div>
  <br />
  <h2>What is space craft ?</h2>
  <img src="pics/space_shuttle.jpg" style=" float:right;width:320px;height:400px; border-radius:20px ;opacity:0.5;" >
  <p>A spacecraft is a vehicle, or machine designed to fly in outer space. Spacecraft are used for a variety of purposes, including communications, earth observation, meteorology, navigation, space colonization, planetary exploration, and transportation of humans and cargo.</p>
  <br />
  
  <p>
  Humanity has achieved space flight but only a few nations have the technology for orbital launches, including: Russia (RSA or "Roscosmos"), the United States (NASA), the member states of the European Space Agency (ESA), Japan (JAXA), Iran (ISA), India (ISRO), and China (CNSA).</p>
  
  <br />
  <h3>History</h3>
  <p>
  Sputnik 1 was the first artificial satellite. It was launched into an elliptical low Earth orbit (LEO) by the Soviet Union on 4 October 1957. The launch ushered in new political, military, technological, and scientific developments; while the Sputnik launch was a single event, it marked the start of the Space Age.</p>
  <br />
  
   <h3> Indian Space-Crafts</h3>
   <p>The Indian Space Research Organisation (ISRO, /ˈɪsroʊ/) is the space agency of the Government of India headquartered in the city of Bengaluru. Its vision is to "harness space technology for national development while pursuing space science research and planetary exploration."</p>
   <br />
   <p> <a href="http://www.isro.gov.in/spacecraft"style="text-decoration:none;">Check out Website...</a>
   
   <br />
   <p> <a href="http://www.isro.gov.in/list-of-spacecrafts"style="text-decoration:none">List of Spacecrafts by ISRO.. </a>
   <br />
   <br />
   <h3>Article By Britannica</h3>
   <a href="https://www.britannica.com/topic/spacecraft"style="text-decoration:none">Click here...</a>
   <br />
   <br />
   </p>
   </p>
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