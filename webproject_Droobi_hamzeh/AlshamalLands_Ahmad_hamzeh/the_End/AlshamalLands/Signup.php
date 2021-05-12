<?php include ("function.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Ragiter_WithUS</title>
	<link rel="stylesheet" type="text/css" href="css/sign up.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <header>

     <nav>



         <div class="row clearfix" >
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

<form  method ="POST"action="Signup.php" style="border:1px solid #ccc">
    <?php echo display_error();?>

    <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required >


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="con_password" required  >

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button  name ="submit"  type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
         <?php echo  display_error();?>

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