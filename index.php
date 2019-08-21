<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
  <link rel="stylesheet" type="text/css" href="class.css">
</head>

<body>
<?php
  require_once("main upper.php"); 
?>

 <div class="cen">
        <div class="cen2">
        <br />
        <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/635911486307123856-95848500_helen-blog-technology.jpg" style="height:400px;width:1124px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/FutureLearn-technology-courses-to-help-you-understand-the-modern-world.jpg" style=" height:400px;width:1124px;border-radius:30px;">
</div><br />
<br />
<div style="float:right" >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XeEYaX82jSE" frameborder="0" allowfullscreen style=" border-radius:35px;"></iframe>
       </div>
        <p  style="font-size:18px;font-family:Tahoma, Geneva, sans-serif;line-height:30px;">  Modern World means advancement in the science and technology in many areas has made the lives of people more advance than the ancient time. Advancement in the science and technology is directly and positively affecting the people’s way of living on one hand however it is also affecting indirectly and negatively on the people’s health on the other hand. New inventions in the field of science and technology are very necessary in such a modern world for a country to be strong and well developed country than other countries. In this competitive world, we need more technology to go ahead and become a successful person in the life.</p>
        <br />
        <br />
         <br />
        <br />
        </div>
 <div>
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
</script
></body>
</html>