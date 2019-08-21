<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Robotics Checkup</title>
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
       <h2>  Robotics Checkup</h2></center><br />
<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/AAEAAQAAAAAAAAOFAAAAJDU5YzIzZmMwLTk2ODEtNDliYy04YzU1LWFkYjBjODhmNWVmNQ.jpg" style="width:1124px;height:400px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/tech-robot-health.jpg" style="height:400px;width:1124px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/figure02.jpg" style="height:400px;width:1124px;border-radius:30px;opacity:0.5">
</div>

       <br />
       <br />
       <div style="float:right" >
        <br />
        <img src="pics/images (3).jpg" style=" width:259px;height:194px;" class="digi" >
        <br />
        <img src="pics/download.jpg" style=" width:259px;height:194px;" class="digi" >
       </div>
       <h2> Medical Robots</h2>
        
       
       <p>
     A medical robot is a robot used in the medical sciences. They include, but are not limited to, surgical robots. These are in most telemanipulators, which use the surgeon's actions on one side to control the "effector" on the other side.</p>
       <br />
       <br />
      
       
       <h3>Types</h3>
       <br />
       
     <ol>
     <li> <a href="https://en.wikipedia.org/wiki/Robotic_surgery"style="text-decoration:none">Surgical robots</a></li>These robots either allow surgical operations to be carried out with greater precision than an unaided human surgeon, or allow remote surgery where a human surgeon is not physically present with the patient.<br /><br />
     <li> <a href="https://en.wikipedia.org/wiki/Rehabilitation_robotics"style="text-decoration:none">Rehabilitation robots</a> </li>This group facilitates and supports the lives of infirm, elderly people, or those with dysfunction of body parts effecting movement. These robots are also used for rehabilitation and related procedures, such as training and therapy.<br /><br />
     <li> <a href="https://en.wikipedia.org/wiki/Biorobotics"style="text-decoration:none">Biorobots </a></li>A group of robots designed to imitate the cognition of humans and animals.<br /><br />
     <li> <a href="https://en.wikipedia.org/wiki/Telerobotics"style="text-decoration:none">Telepresence robots</a></li>Allow off-site medical professionals to move, look around, communicate, and participate from remote locations.<br /><br />
     <li> <a href="https://en.wikipedia.org/wiki/Pharmacy_automation"style="text-decoration:none">Pharmacy automation</a></li>Robotic systems to dispense oral solids in a retail pharmacy setting or preparing sterile IV admixtures in a hospital pharmacy setting<br /><br />
     </ol>
    <h4> Robotics in Healthcare   Get Ready</h4><br />
    <a href="http://medicalfuturist.com/robotics-healthcare/" style="text-decoration:none">Click here to know more .. </a>
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