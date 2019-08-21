<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artifical Cell</title>
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
       <h2>  Artifical Cell </h2></center><br />
       
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/extra_large-1464357139-2040-scientists-create-simple-artificial-cell-capable-of-spontaneous-movement.jpg" style="width:1124px;height:450px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/artificialce.jpg" style="height:450px;width:1124px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/artificialcell.jpg" style=" height:450px;width:1124px;border-radius:30px;">
</div>
<div style="float:right" >
        <br />
        <img src="pics/1-s2.0-S1369702116000699-gr1.jpg" style=" width:250px;height:220px;" class="digi" >
        
       </div>
<br /><h2>What it is ?</h2><br />

<p> An artificial cell or minimal cell is an engineered particle that mimics one or many functions of a biological cell. The term does not refer to a specific physical entity, but rather to the idea that certain functions or structures of biological cells can be replaced or supplemented with a synthetic entity. Often, artificial cells are biological or polymeric membranes which enclose biologically active materials. As such, nanoparticles, liposomes, polymersomes, microcapsules and a number of other particles have qualified as artificial cells. Micro-encapsulation allows for metabolism within the membrane, exchange of small molecules and prevention of passage of large substances across it.</p>

<a href="https://en.wikipedia.org/wiki/Artificial_cell"style="text-decoration:none">more details..</a>
<br />
<br />
<h2> How to make a cell ?</h2>
<p>Researchers at the Venter Institute explain their groundbreaking techniques.</p>
<a href="https://www.technologyreview.com/s/419359/how-to-make-an-artificial-cell/"style="text-decoration:none">click here for more details</a>
<br />
<br />
<h3> Artificial Cells in the Future</h3>
<p>With the progress in the nanotechnology and molecular biology, novel and more advanced artificial cell types with improved polymer membranes and new contents will be developed. Scientists are also working on with the hope of creating a “living artificial cell” which will be entirely man-made but will mimic biological cells in every other way. There are also predictions that “Programmable Artificial Cell Evolution”, an integrated programme supported by the European Union will eventually succeed in incorporating the artificial cells into computer and robotics technology, thereby making self-repairing computers.
<p>
<br /><br />
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