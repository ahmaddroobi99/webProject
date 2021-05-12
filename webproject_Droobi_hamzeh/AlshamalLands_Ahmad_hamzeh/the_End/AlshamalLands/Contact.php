<?php include ("function.php")?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact_US</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 <header>
     <nav>
       <div class="row clearfix">
       	    <img src="imgs/logo.png" class="logo">

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
        <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <br>
    <p>Swing by for a peace of land or any thing you want , or leave us a message:</p>
    <br>
  </div>
  <div class="row">
    <div class="column">
      <h1> WE CAre For your happiness... </h1>
      <br><p>No matter what ‘home’ means to you, there is surely something nostalgic about the place we call home. It’s the place where we eat, the place with friends and family,  and it’s the place we make our own. Sometimes in life we could use a little reminder of how it feels to be home, to come home, and to leave home <p style="font-family: body; color: #bf55ec;">Motaseem & rawhi DRoobi</p>and we'll put together a special offers just for you.</p>

       <br> <img src="imgs/contact.jpg" style="width:100%">
          <h1>...AND In PAlestine TOO.</h1>
          <br><p>For more information About our services ? Call us at and we keep in touch with you in an hours <p style="font-family: body;color: #bf55ec">
 0592230022</p>and we'll be there at your doorstop with your order!</p>
<p>Email:-ahmad.droobi1999@gmail.com</p>
    </div>
    <div class="column">
      <form method="POST" action="Contact.php">
        <label for="fname"> Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">
        <label for="phone"> phone</label>
        <input type="text" id="lname" name="phone" placeholder="Your phone  #....">
        <label for="city">City</label>
        <select id="city" name="city">
          <option value="Nablus">Nablus</option>
          <option value="Tulkarm">Tulkarm</option>
          <option value="Ramallah">Ramallah</option>
          <option value="Qalqilaya">Qalqilaya</option>
          <option value="jenin">jenin</option>
          <option value="hebron">hebron</option>
          <option value="Occuipid_palestine">Occuipid_palestine</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="addcomment">
      </form>
    </div>
  </div>
</div>


<footer>
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/accounts/login/?hl=en" class="fa fa-instagram"></a>
<a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" class="fa fa-snapchat-ghost"></a>
<a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google"></a>
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