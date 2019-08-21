<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Researches</title>
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
       <h2>  Researches  </h2></center>
       <br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/star-formation-and-ism-header.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/romulus25_3panel.png" style="width:1124px;height:350px;border-radius:30px;">  
</div>
<br />
<h2>Astronomy</h2>
<div style="float:right" >
        <img src="pics/Veil_Nebula_section_node_full_image_2.jpg" style=" width:259px;height:194px;" class="digi" >
        <br />
        <br />
        <img src="pics/telescope.jpg" style=" width:259px;height:194px;" class="digi" >
       </div>
<p>Astronomy is a multidisciplinary natural science that deals with the study of celestial objects (such as stars, planets, comets, nebulae, star clusters and galaxies) and phenomena that originate outside the Earth's atmosphere (such as the cosmic background radiation).</p>

<a href="http://astro.cornell.edu/research-areas.html"style="text-decoration:none">more details..</a>
<br />
<br />

 <h2> Harvard Research  Department</h2>
 <p>Harvard Astronomers work on a broad variety of research areas ranging from the solar system to the edge of the observable Universe. You may read more details on a selected list of these research areas by clicking on the items on the left.</p>
 <a href="https://astronomy.fas.harvard.edu/research"style="text-decoration:none">Site link..</a>

<br />
<br />
<h2> Yale Research  Department</h2>
 <p>Research ... Extragalactic Astronomy. Active Galactic Nuclei; Galaxy Clusters; Galaxy Structure, Formation ... Galactic Astronomy. Galactic Structure; Kinematics.</p>
 <a href="http://astronomy.yale.edu/research"style="text-decoration:none">Site link..</a>
<br />
<br />
<h2> Astronomy Research Societies</h2>
<p> Different society for astronomy  researches are there some of them are :-</p>
<a href="https://www.ras.org.uk/" style="text-decoration:none">The Royal Astronomical</a><br />
<a href="http://www.marsmysore.org/" style="text-decoration:none">Mysore Astronomical and Researches</a><br />
<a href="http://www.aura-astronomy.org/" style="text-decoration:none">AURA</a><br />
<a href="https://aas.org/" style="text-decoration:none">American Astronomical society</a><br />
<a href="https://parsnetwork.org/" style="text-decoration:none">PARS </a><br />
<a href="https://www.facebook.com/TAAS.Astronomers/" style="text-decoration:none">TAAS(Thapar University, Pataila)</a><br />
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