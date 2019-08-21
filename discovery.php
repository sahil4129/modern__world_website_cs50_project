<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Astronomy Discoveries</title>
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
       <h2> Astronomy Discoveries</h2></center>
       <br />
       
       <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/maxresdefault (2).jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/150128064333-giant-planetary-ring-system-super-169.jpg" style="height:350px;width:1124px;border-radius:30px;" />
</div>
<br />
<h2>Discoveries</h2>
<div style="float:right" >
        <img src="pics/Life-In-The-Universe-Old-Astronomy-To-Todays-Discoveries-Infographic.png" style=" width:350px;height:250px;" class="digi"/>
        <br />
        <br />
       </div>

<p>Astronomy is the cool,intersting of the scientific world. Sure, biologists and chemists are out there curing diseases or whatever, but they’re just so boring. Meanwhile, astronomers are busy showing us sweet pictures of distant planets and playing around with telescopes the size of buildings. How can you compete with that? You can’t, so here are the ten most important things astronomers throughout the ages have discovered:</p>
<br />
<br />
<h2> Most Important Discoveries:-</h2>
<a href="http://www.toptenz.net/top-10-most-important-discoveries-in-astronomy.php"style="text-decoration:none">Link 1</a>
<br />
<a href="https://www.space.com/35099-most-amazing-space-astronomy-discoveries-of-2016.html"style="text-decoration:none">Link 2</a>
<br />
<br />
<h2> Timeline of astronomy</h2>
<a href="https://en.wikipedia.org/wiki/Timeline_of_astronomy"style="text-decoration:none"> Wikipedia</a>
<br />
<br />
<h2> Videos </h2>
<a href="https://youtu.be/idRjqi8JC2U" style="text-decoration:none">Click here.</a>
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