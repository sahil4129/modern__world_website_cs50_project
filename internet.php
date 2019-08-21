<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Internet</title>
</head>
<link rel="stylesheet" href="class.css" type="text/css" />
<body>
<?php
  require_once("main upper.php"); 
?>
<div class="cen">
  <div class="cen2">
  
           <center>
           <h2> Internet</h2>
           </center>
           <br />
           <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/internet-1593256_960_720.jpg" style="width:1124px;height:350px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/Club-Anastasia-58-1120x476.jpg" style="height:350px;width:1124px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/cropped-home.png" style=" height:350px;width:1124px;border-radius:30px;">
           </div>
           <br />
           <br />
           <p style="line-height:30px; font-size:17px;"> 
           The Internet, sometimes called simply "the Net," is a worldwide system of computer networks - a network of networks in which users at any one computer can, if they have permission, get information from any other computer
           </p>
           <br />
           <div style="float:right" >
        <img src="pics/images.jpg" style=" width:259px;height:194px;"class="inter"/>
        <br />
        <br />
        <img src="pics/Mobile-internet.jpg" style=" width:259px;height:194px;" class="inter" >
       </div>
           <h3> History</h3>
           <br />
           <p style="line-height:20px; font-size:15px;">
           History of the Internet begins with the development of electronic computers in the 1950s. Initial concepts of wide area networking originated in several computer science laboratories in the United States, United Kingdom, and France.[1] The US Department of Defense awarded contracts as early as the 1960s, including for the development of the ARPANET project, directed by Robert Taylor and managed by Lawrence Roberts. The first message was sent over the ARPANET in 1969 from computer science Professor Leonard Kleinrock's laboratory at University of California, Los Angeles (UCLA) to the second network node at Stanford Research Institute (SRI).
     
     <br />
     <a  href="https://en.wikipedia.org/wiki/History_of_the_Internet" style="text-decoration:none">More  details</a>
           </p>
           <br />
        <h3> How It works ?</h3>
        
        <br />
        <p>
         The Internet workings include a technical design and a management structure. The management structure consists of a generally democratic collection of loosely-coupled organizations and working groups with mostly non-overlapping responsibilities. The technical design is founded on a complex, interlocking set of hierarchical tree-like structures, like Internet Protocol addresses and domain names, mixed with networked structures like packet switching and routing protocols, all tied together with millions of lines of sophisticated software that continues to get better all the time. 
         <br />
        <a href = " http://www.explainthatstuff.com/internet.html" style="text-decoration:none"> Click for more information ..</a><br />
         <a href = "https://youtu.be/7_LPdttKXPc" style="text-decoration:none"> Check out the video.. </a> 
        </p>
        <br />
        <p>
         <h4> Latest Intenet Technologies :- </h4>
        </p>
        <br />
      <ol>
        <li><a href="http://purelifi.com/technology/" style="text-decoration:none">Lifi:-</a></li>
          &nbsp;&nbsp;&nbsp; &nbsp;The term Li-Fi was coined by pureLiFi's CSO, Professor Harald Haas, and refers to light based communications technology <br />
          
          <li><a href="https://datafloq.com/read/Artificial-Intelligence-Kickstart-Internet-Things/1776" style="text-decoration:none"> IoT & AI :- </a></li>
           &nbsp;&nbsp;&nbsp; &nbsp;The Internet of things (IoT) is the network of physical devices, Artificial intelligence is intelligence exhibited by machines, rather than humans or other animals <br />
          
          
          <li><a href="https://assistant.google.com/" style="text-decoration:none"> Google Assistant :- </a></li>
          &nbsp;&nbsp;&nbsp; &nbsp;Google Assistant is a virtual personal assistant developed by Google and announced at its developer conference in May 2016. Unlike Google Now, the Google Assistant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;can engage in two-way conversations. <br />
        <li><a href="https://en.wikipedia.org/wiki/Social_media" style="text-decoration:none"> Social Media :- </a></li>
          &nbsp;&nbsp;&nbsp; &nbsp;Social media is the collective of online communications channels dedicated to community-based input, interaction, content-sharing and collaboration.
          
        </ol>
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
    setTimeout(carousel, 3000);    
}
</script>
</body>
</html>