<!DOCTYPE html>
<html>
<head>
	<title>About_CAFE</title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 <header>
     <nav>
       <div class="row clearfix">
       	    <img src="imgs/logo.jpg" class="logo">

       	 <ul class="main-nav animated slideInDown" id="check-class">
       	 	<li><a href="Home.php">HOME</a></li>
       	 	<li><a href="Menu.php.">MENU</a></li>
       	 	<li><a href="About.php">ABOUT</a></li>
       	 	<li><a href="Contact.php">CONTACT US</a></li>
       	 </ul> 
         <a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i></a>
       </div>	
     </nav>
       <div class="main-content-header">
        <h1>Who we are and what we do.</h1>
        <hr>
        <br><p> we are will organized company for busniess in palestine we are interested in lands in tulkark in special and in all over palestine as general and we are coordinators of depermants that be fishing them acoording to the client prosbectives and intersted in car induestry and we are more than happy to advertise any product or any thingconnected with buesniess  <br>
          <br> we try always to be more honest and clear with our prices and we love to help for anyone so we launch this site for your help in both finding your one product and publish by us to yours , in the end we and you are the same in the bessinus industry ..wish you all the best in your journy in our website...get in touch with us and make your products shinning like the sun and the mooon of palestine ..we are clean coordination that find the right people for the right product and right price of course...
          <br>
          <br> Today it is a name that is now so well known all over our World.</p>
      <div class="container">
  <img src="pictures/cover1.jpg" alt="about 1" style="width: 100%">
   <div class="content">
    <h1>Palestine_shufaa</h1>
  </div>
</div>

<br>
<br><h1>Secrets of the holy land of palestine </h1>
<br><hr>
<br>
           <img src="pictures/COVV.jpg" alt="about 2" usemap="#workmap" style="width: 60%;margin-left: 20%;" align="center">
           <br><p>The battle between two men over a girl is the same as the fight for two men over a piece of land. It is all about desire. There is no difference between a love triangle and the conflict between Israel and Palestine. Bruno Dumont
           <br>
           <br>An hour of violin lessons in Berlin is an hour where you get the child interested in music. An hour in a violin lesson in Palestine is an hour away from violence, is an hour away from fundamentalism.

     </p>

<map name="workmap" >
  <area shape="rect" coords="0,-1,541,360" alt="Menu" href="Menu.php.">
</map>
   
<br>
<br><h1>Love of the land..</h1>
<br><hr>
<br><p>Your eyes are a thorn in my heart
           Inflicting pain, yet I cherish that thorn
           And shield it from the wind.
           I sheathe it in my flesh, I sheathe it, protecting it from night and agony,
           And its wound lights the lanterns,
           Its tomorrow makes my present
           Dearer to me than my soul.
           And soon I forget, as eye meets eye,
           That once, behind the doors, there were two of us.<br>
<br>Your words were a song
           And I tried to sing, too,
           But agony encircled the lips of spring.
           And like the swallow, your words took wing,
           The door of our home and the autumnal threshold migrated,
           To follow you wherever led by longing
           Our mirrors were shattered,
           And sorrow was multiplied a thousand fold.
           And we gathered the splinters of sound,
           Mastering only the elegy of our homeland!
           Together were will plant it in the heart of a lyre,
           And on the rooftops of our tragedy we’ll play it
           To mutilated moons and to stones.
           But I have forgotten, you of the unknown voice:
           Was it your departure that rushed the lyre or was it my silence?</p>
<div class="slideshow-container">

    <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="pictures/n3.jpg" style="width:100%">
    <div class="text">my land</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="pictures/n4.jpeg" style="width:400px">
    <div class="text">my borders</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="pictures/n6.jpg" style="width:100%">
    <div class="text">my mother</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="pictures/n7.jpg" style="width:100%">
    <div class="text">a land of dreams </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="pictures/n2.jpg" style="width:100%">
    <div class="text">contact us soon..</div>
  </div>

  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
<br>


<br><hr>
<br>
<footer>
  <h1><span class="colorchange"> THANK YOU.. </span></h1>
  <br>
  <hr>
</footer>

</div>
</header>   




<script type="text/javascript">
   
  function slideshow(){
      var x = document.getElementById('check-class');
      if(x.style.display === "none"){
        x.style.display="block";
      } else{
        x.style.display="none";
      }
   }
 

 

   var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
 </script>


 </body>
</html>
