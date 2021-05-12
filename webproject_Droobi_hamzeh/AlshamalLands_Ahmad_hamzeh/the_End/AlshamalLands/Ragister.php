<?php include ("function.php")?>

<!DOCTYPE html>
<html>
<head>
	<title>Ragiter_CAFE</title>
	<link rel="stylesheet" type="text/css" href="css/ragister.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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
  <form  method ="POST" action="ragister.php">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <br>
      <div class="vl" style="font-size: 120%;">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="https://www.facebook.com/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="https://twitter.com/login?lang=en" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogind" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name="login_btn">
      </div>

    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="Signup.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
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

 </script>
 </body>
</html>