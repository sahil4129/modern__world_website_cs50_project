<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Telescopes</title>
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
       <h2>  Telescopes</h2></center>
       <br />
       
       <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/telescope.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/landscape-1498069260-telescopes.jpg" style="height:350px;width:1124px;border-radius:30px;" />
</div>
<br />
 <h3> What is Telescope ?</h3>
 <p>A telescope is an optical instrument that aids in the observation of remote objects by collecting electromagnetic radiation (such as visible light). The first known practical telescopes were invented in the Netherlands at the beginning of the 17th century, by using glass lenses. They found use in both terrestrial applications and astronomy.</p>
 <br />
 <h3>History</h3>
 <p>
 The earliest existing record of a telescope was a 1608 patent submitted to the government in the Netherlands by Middelburg spectacle maker Hans Lippershey for a refracting telescope.[4] The actual inventor is unknown but word of it spread through Europe. Galileo heard about it and, in 1609, built his own version, and made his telescopic observations of celestial objects.</p>
 <br />
 <h3> Types of Telescopes</h3>
 <p>
 The name "telescope" covers a wide range of instruments. Most detect electromagnetic radiation, but there are major differences in how astronomers must go about collecting light (electromagnetic radiation) in different frequency bands.</p>
 <p>
 Telescopes may be classified by the wavelengths of light they detect:
</p>
<div style="float:right" >
        <img src="pics/images (1).jpg" style=" width:350px;height:250px; opacity:0.5" class="digi"/>
        <br />
        <br />
       </div>
<ol>
<li>
X-ray telescopes, using shorter wavelengths than ultraviolet light</li>
<li>
Ultraviolet telescopes, using shorter wavelengths than visible light</li>
<li>Optical telescopes, using visible light</li>
<li>Infrared telescopes, using longer wavelengths than visible light</li>
<li>Submillimetre telescopes, using longer wavelengths than infrared light</li>
<li>Fresnel Imager, an optical lens technology</li>
<li>X-ray optics, optics for certain X-ray wavelengths</li>
</ol>
<br />
<h3>How it works ?</h3>
<p> <a href="https://www.youtube.com/watch?v=7eLwbil7Ddk"style="text-decoration:none;">Check out Video...</a>
<br />
<br />

<h3> Want to Buy</h3>
<p>
<p> Now You can Buy a telescope online.There are Wide range of telescopes are available:-</p>

<p> <a href="https://www.amazon.in/Telescopes/b?ie=UTF8&node=1389170031" style="text-decoration:none">Buy Telescope Online from Amazon</a></p>
<p> <a href="https://www.snapdeal.com/products/cameras-binoculars-telescopes?sort=plrty" style="text-decoration:none">Buy Telescope Online from Snapdeal</a></p>
<p> <a href="https://galileotelescope.com/" style="text-decoration:none">Buy Telescope Online from Galileotelescopes</a></p>
<br />
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