<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Digital</title>
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
       <h2>  Digital Technology</h2></center><br />
       <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/5c8h269y-1480961703.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/1046x616_digital_handshake (2).jpg" style="height:350px;width:1124px;border-radius:30px;">
</div>
       <br />
       <p style="line-height:30px; font-size:17px;"> Technology ("science of craft", techne, "art, skill, cunning of hand") is the collection of techniques, skills, methods and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. Technology can be the knowledge of techniques, processes, and the like, or it can be embedded in machines which can be operated without detailed knowledge of their workings.</p>
       
       
       <br />
       <br />
       
       <h3> Digital usually refers to something using digits, particularly binary digits.</h3><br />
       
       <p>
       <ol class="od">
       <div style="float:right" >
        <img src="pics/download (1).jpg" class="digi"/>
        <br />
        <br />
        <img src="pics/shutterstock_226194991.jpg" style=" width:259px;height:194px;" class="digi" >
        <br />
        <br />
        <img src="pics/6358850986901693652109630270_tech-trends.jpg" style=" width:259px;height:194px;" class="digi" >
       </div>
       <li><a href="https://en.wikiversity.org/wiki/Digital_culture" style="text-decoration:none;">Digital Culture :- </a></li>&nbsp;&nbsp;&nbsp;&nbsp;the anthropological dimension of the digital social changes<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_camera" style="text-decoration:none;">Digital Camera :-</a></li>&nbsp;&nbsp;&nbsp;&nbsp; which captures and stores digital images<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_electronic_computer" style="text-decoration:none;">Digital Computer:-</a></li>&nbsp;&nbsp;&nbsp;&nbsp;a computer that handles information represented by discrete values<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_data" style="text-decoration:none;">Digital Data:-</a></li>&nbsp;&nbsp;&nbsp;&nbsp;discrete data, usually represented using binary numbers<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_divide
" style="text-decoration:none;">Digital Divide :-</a></li>&nbsp;&nbsp;&nbsp; &nbsp;a form of economic and social inequality in access to or use of information and communication technologies<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_economy" style="text-decoration:none;">Digital Economy :-</a></li>&nbsp;&nbsp;&nbsp;&nbsp; an economy based on computing and telecommunications resources<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_electronics" style="text-decoration:none;">Digital Electronics :-</a></li>&nbsp; &nbsp;&nbsp;&nbsp;electronic circuits which operate using digital signals<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_media
" style="text-decoration:none;">Digital Media :-</a></li>&nbsp;&nbsp;&nbsp;&nbsp;media stored as digital data<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_radio
" style="text-decoration:none;">Digital Radio:- </a></li>&nbsp;&nbsp;&nbsp;&nbsp;which uses digital technology to transmit or receive<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_signal
" style="text-decoration:none;">Digital Signal (electronics) :-</a></li>&nbsp;&nbsp; &nbsp;&nbsp;signals formed from a discrete set of waveforms, rather than continuous ranges<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_signal_processing
" style="text-decoration:none;">Digital Signal (signal processing) :-</a></li>&nbsp;&nbsp;&nbsp;&nbsp;sampled analog signals represented as a sequence of digital values<br /><br />
<li><a href="https://en.wikipedia.org/wiki/Digital_television" style="text-decoration:none;">Digital Television :-</a></li>&nbsp; &nbsp;&nbsp;&nbsp;television systems which broadcast using digital signals<br /><br />
</ol>
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