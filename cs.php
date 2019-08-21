<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Researches </title>
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
       <h2> Computer Science Researches </h2></center>
       <br />
       <div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="pics/cropped-information-technology-page.jpg" style="width:1124px;height:400px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/computers.png" style="height:400px;width:1124px;border-radius:30px;">
  <img class="mySlides w3-animate-fading" src="pics/gamepipe.jpg" style="height:400px;width:1124px;border-radius:30px;">
</div>
<br />
<h3>Computer Science </h3>
<br />

       <p> It is a quarterly international journal that publishes high-quality research and survey papers from the Software Engineering & Systems area and its adjacent disciplines, with inclusion of embedded systems, mobile systems, information systems, algorithm engineering, web engineering, ubiquitous computing, service-oriented architectures, model-driven architectures, process-oriented architectures and related topics. Also, contributions describing research in application areas as e.g. mechanical engineering, medical engineering and medical technology, traffic engineering and environmental technology </p>
  <br />
  <br />
  <h3>Areas of Research in Computer Science</h3><br />
  <div style="float:right" >
        <img src="pics/science-concept-computer-science-on-computer-keyboard-background-F5JJKF.jpg" style=" width:350px;height:350px;" class="digi" >
        
       </div>

  <ol>
  <li><a href="https://www.inf.ethz.ch/research/data-management-machine-learning.html"style="text-decoration:none">Data Management and Machine Learning</a>
  </li>
  Computers have fundamentally changed the way the world produces, manages, processes and analyzes data. Not only does the amount of data keep growing every day, but what we do with the data and how we extract value from it is becoming a dominant theme in our society.<br /><br />
  <li><a href="https://www.inf.ethz.ch/research/information-system-security.html"style="text-decoration:none">Information and System Security</a></li>Information and System Security is both a problem of fundamental importance for modern society and a scientific discipline with its own foundations and methods.<br /><br />
  <li><a href="https://www.inf.ethz.ch/research/networked-systems-parallel-computing.html"style="text-decoration:none">Networked Systems and Parallel Computing</a></li>ETH Zurich has a long tradition of tackling fundamental, long-term research problems in computer science by building and learning from complete computer systems.<br /><br />
  <li><a href="https://www.inf.ethz.ch/research/pervasive-computing-cyberphysical-systems.html"style="text-decoration:none">Pervasive Computing and Cyberphysical Systems</a></li>Computing pervades more and more sectors of the physical world and computer science is becoming pervasive in all sectors of society.<br /><br />
  <li><a href="https://www.inf.ethz.ch/research/programming-languages-software-engineering.html"style="text-decoration:none">Programming Languages and Software Engineering</a></li>
  Research in this area ranges from theoretical underpinnings to practical tools supporting today’s ambitious software projects. Topics of particular attention include: programming language design, software performance, and concurrency, as well as program analysis, synthesis, verification and testing.
<br /><br />
  <li><a href="https://www.inf.ethz.ch/research/theory-algorithms.html"style="text-decoration:none">Theory and Algorithms</a></li>Computer science has the dual nature of being an engineering science as well as a basic science (like physics), concerned with fundamental concepts including processes, computation, information and communication.<br />
  <br /><br />
  </ol>
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