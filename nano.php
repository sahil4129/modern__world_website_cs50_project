<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nanotechnology</title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<?php
  require_once("main upper.php"); 
?>
<div class="cen">
 <div class="cen2">
       <center>
       <br />
       <h2> Nanotechnology </h2></center><br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/maxresdefault.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/1431545790-website hero image.png" style="height:350px;width:1124px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/maxresdefault (1).jpg" style=" height:350px;width:1124px;border-radius:30px;">
</div>
  <br />
  <br />
  <h3> What is Nanotochnology ?</h3>
  <br />
  <p> Nanotechnology ("nanotech") is manipulation of matter on an atomic, molecular, and supramolecular scale. The earliest, widespread description of nanotechnology referred to the particular technological goal of precisely manipulating atoms and molecules for fabrication of macroscale products, also now referred to as molecular nanotechnology. A more generalized description of nanotechnology was subsequently established by the National Nanotechnology Initiative, which defines nanotechnology as the manipulation of matter with at least one dimension sized from 1 to 100 nanometers. This definition reflects the fact that quantum mechanical effects are important at this quantum-realm scale, and so the definition shifted from a particular technological goal to a research category inclusive of all types of research and technologies that deal with the special properties of matter which occur below the given size threshold. <p>
  <a href="http://www.nnin.org/news-events/spotlights/what-nanotechnology"style="text-decoration:none"> More .. </a>
  <br />
  <br />
  <ol>
  <div style="float:right" >
        <img src="pics/nano-01-lg.jpg"  style="width:259px;height:194px;"class="digi"/>
        <br />
        <br />
        <img src="pics/little-wings_felix-kraemer.jpg" style=" width:259px;height:194px;" class="digi" >
        <br />
        <br />
       </div>
  <li><a href="http://www.understandingnano.com/medicine.html" style="text-decoration:none;">Medicines</a></li>&nbsp;&nbsp;&nbsp;&nbsp;Researchers are developing customized nanoparticles the size of molecules that can deliver drugs directly to diseased cells in &nbsp;&nbsp;&nbsp;&nbsp;your body.<br /><br />
<li><a href="http://www.understandingnano.com/nanotechnology-electronics.html" style="text-decoration:none;">Electronics:-</a></li>&nbsp;&nbsp;&nbsp;&nbsp; Nanotechnology holds some answers for how we might increase the capabilities of electronics devices while we reduce their &nbsp;&nbsp;&nbsp;&nbsp;weight and power consumption.<br /><br />
<li><a href="http://www.understandingnano.com/food.html" style="text-decoration:none;">Food:-</a></li>&nbsp;&nbsp;&nbsp;&nbsp;Nanotechnology is having an impact on several aspects of food science, from how food is grown to how it is packaged.<br /><br />
<li><a href="http://www.understandingnano.com/solarcells.html
" style="text-decoration:none;">Solar cells :-</a></li>&nbsp;&nbsp;&nbsp; &nbsp;Companies have developed nanotech solar cells that can be manufactured at significantly lower cost than conventional solar cells.<br /><br />
<li><a href="http://www.understandingnano.com/batteries.html" style="text-decoration:none;">Batteries :-</a></li>&nbsp;&nbsp;&nbsp;&nbsp; Companies are currently developing batteries using nanomaterials. One such battery will be a good as new after sitting on the shelf &nbsp;&nbsp;&nbsp;&nbsp;for decades.<br /><br />
<li><a href="http://www.understandingnano.com/space.html" style="text-decoration:none;">Space :-</a></li>&nbsp; &nbsp;&nbsp;&nbsp;Nanotechnology may hold the key to making space-flight more practical. <br /><br />
<li><a href="http://www.understandingnano.com/fabrics.html
" style="text-decoration:none;">Febrics :-</a></li>&nbsp;&nbsp;&nbsp;&nbsp;Making composite fabric with nano-sized particles or fibers allows improvement of fabric properties <br /><br />
</ol>
<br />
<h3> Here is You tube link to learn more about Nanotechnology</h3>
<a href ="https://www.youtube.com/results?search_query=nanotechnology" style="text-decoration:none"> Click here..</a>
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
    setTimeout(carousel, 3000);    
}
</script>
</body>
</html>