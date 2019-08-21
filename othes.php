<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Other Researches</title>
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
       <h2>  Other Researches  </h2></center>
       <br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/medical-science-research-technology-male-female-scientific-team-blood-testing-cg_v15fsamyg__F0000.png" style="width:1124px;height:450px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/lab3.jpg" style="width:1124px;height:450px;border-radius:30px;">  
  <img class="mySlides w3-animate-fading" src="pics/banner5.jpg" style="width:1124px;height:450px;border-radius:30px;">
</div>
<br />
<h2>Researches</h2><br />
<div style="float:right" >
        <img src="pics/images (8).jpg" style=" width:400px;height:350px;" class="digi" >
       </div>
<p>Biomedical research (or experimental medicine) encompasses a wide array of research from "basic research" (also called bench science or bench research),[1] involving the elucidation of more fundamental scientific principles, to clinical research, which is distinguished by the involvement of patients. Within this spectrum is applied research, or translational research conducted to aid and support the development of knowledge in the field of medicine, and pre-clinical research, for example involving animals.</p>

<a href="https://en.wikipedia.org/wiki/Medical_research"style="text-decoration:none">more details..</a>
<br />
<br />

 <h2> Stanford  Research  Department</h2><br />
 <p>We are drawn to the difficult problems, the ones for which prevailing science does not yet have a framework to understand. Our strength is in developing new paradigms to tackle these problems and opening new avenues to transform human health</p>
 <a href="http://med.stanford.edu/research.html"style="text-decoration:none">Site link..</a>

<br />
<br />
<h2> Indian Council of Medical  Research  </h2><br />
 <p>The Indian Council of Medical Research (ICMR), New Delhi, the apex body in India for the formulation, coordination and promotion of biomedical research, is one of the oldest medical research bodies in the world.</p>
 <a href="http://www.icmr.nic.in/"style="text-decoration:none">Site link..</a>
<br />
<br />
<h2>Archives of Medical Research</h2><br />
<p> Archives of Medical Research publishes original peer-reviewed medical research in an attempt to bridge the gaps created by medical specialization. Contributions are grouped into three main categories - biomedical, clinical, and epidemiological. Review articles and preliminary communications will also</p>
<a href=""style="text-decoration:none"> read more </a>
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