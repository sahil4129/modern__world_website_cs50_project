<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Robotics and Automation</title>
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
           <h2>  Robotics  & Automation </h2></center>
                <div class="w3-content w3-section" style="max-width:1200px">
                  <img class="mySlides w3-animate-fading" src="pics/1493890875.jpg" style="width:1124px;height:350px;border-radius:30px;">
                  <img class="mySlides w3-animate-fading" src="pics/HEA-RO-GM_PrRange-4.jpg" style="height:350px;width:1124px;border-radius:30px;">
                  <img class="mySlides w3-animate-fading" src="pics/tech-robot-health.jpg" style=" height:350px;width:1124px;border-radius:30px;">
                </div>
           <br />
           <div style="float:right" >
            <br />
            <img src="pics/720_1480344016_Robotics.jpg" style=" width:259px;height:194px;" class="digi" >
            
           </div>
           <br />
           
           <p>
           Robots have been a feature of manufacturing business for over 20 years. The robot can provide high quality components and finished products and do so reliably and repeatedly even in hazardous or unpleasant environments. Robots are used in industries for speeding up the manufacturing process. They are also used in the field of nuclear science, sea-exploration, servicing of transmission electric signals, designing of bio-medical equipments etc. Robotics requires the application of computer integrated manufacturing, mechanical engineering, electrical engineering, biological mechanics, software engineering.</p>
           <br />
           <br />
           
           <h3> Future of Robotics and Automtion</h3>
           <br />
           <p>
           Recently, McDonald's shares hit an all-time high, buoyed by Wall Street's expectations that investments in automation technologies will drive business value: As part of its "Experience of the Future" initiative, McDonald's announced plans to roll out digital ordering kiosks that will replace cashiers in 2,500 of its locations. The company will also extend its customer self-service efforts, deploying mobile ordering at 14,000 locations.</p>
           <a href="http://www.zdnet.com/article/the-future-of-jobs-automation-technologies-robotics-and-artificial-intelligence/" style="text-decoration:none">Read more... </a><br />
           <div style="float:right" >
            <img src="pics/Veil_Nebula_section_node_full_image_2.jpg" style=" width:259px;height:194px;" class="digi" >
            <br />
            <br />
           </div>
           
            <a href="https://www.youtube.com/watch?v=vMHfUWkELg0" style="text-decoration:none">You tube Link.. </a>
            <br />
            <br />
            <h3> Recent Developments</h3>
            
            <a href="https://www.livescience.com/topics/robots" style="text-decoration:none"> Click here... </a>
            <br /><br />
            
             <h4> IEEE Robotics and Automation Society </h4>
             <p> he Society strives for the advancement of the theory and practice of robotics and automation engineering and science and of the allied arts and sciences, and for the maintenance of high professional standards among its members, all in consonance with the Constitution and Bylaws of the IEEE and with special attention to such aims within the Field of Interest of the Society.</p>
             <br /><p><a href="http://www.ieee-ras.org/" style="text-decoration:none">Check out website...</p></a>
             <br />
             <h3><a href="https://www.google.co.in/search?q=robotic+and+automation&newwindow=1&source=lnms&tbm=nws&sa=X&ved=0ahUKEwjN-vO00MXWAhWKvY8KHTDtB3wQ_AUICigB&biw=1366&bih=613" style="text-decoration:none"> Latest News about Robotics and Automation</a></h3>
          <br /> <br />
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