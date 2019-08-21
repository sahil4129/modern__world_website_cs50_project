<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fibertonics</title>
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
       <h2> Fibertonics</h2></center><br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/maxresdefault (3).jpg" style="width:1124px;height:450px;border-radius:30px;">
  
</div>
 <div style="float:right" >
        <br />
        <img src="pics/images (4).jpg" style=" width:259px;height:194px;" class="digi" >
        <img src="pics/Surgery_Figure2.jpg" style=" width:259px;height:194px;" class="digi" >
        <br />
       </div>
       <br />
<h2> Optic Fibers</h2>
<br />
<p> Optical fibers have been used in medical devices since the 1960s, when bundled fibers were successfully pioneered for both illumination and imaging through endoscopes. During the late 1980s, optical fiber imaging tools were widely accepted for invasive surgery. However, optical fibers have the potential to be used in many more applications than imaging and light sources. Special optical fibers also are used as intelligent sensors to monitor physiology parameters such as temperature, pressure, oxygen concentration and applied force.</p>
<br />
<p>Fiber optic sensors offer many advantages over conventional electronic sensors in medical sensing: small size, immunity to electromagnetic interference (EMI), enhanced sensitivity, robustness and geometrical versatility. They also are free from electrical parts or conductors in the sensor area. These unique properties have enabled complicated procedures in cardiovascular examinations, angiology, gastroenterology, ophthalmology, oncology, neurology, dermatology and dentistry. 
</p>
<a href="https://www.photonics.com/Article.aspx?AID=48684"style="text-decoration:none">More details..</a>
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