<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Al Shamal Lands</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="home/styleSocial.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="home/MenuNav.css">

    <script src="home/oldScript.js" ></script>
    <link rel="stylesheet" href="home/styleHome.css" />
    <link rel="stylesheet" href="home/oldStyle.css" /> 
    <link rel="stylesheet" href="home/scroller.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Oswald:700|Poppins"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="home/galleryStyle.css">
    
  </head>

  <body>
 
    <div class="loading-screen">
      <div class="loading">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>

  <script type="text/javascript">
  window.addEventListener("load",function () {

      const loading_screen = document.querySelector(".loading-screen");
      loading_screen.className += "-hidden";


  })
  </script>



  <!-- for menu -->

  

  
    
    <div class="menu-icon">
      <i class="fas fa-align-right"></i>
    </div>
  
    <div class="navigation-menu">
      <nav>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Menu.php">Menu</a></li>
        <li><a href="order_OR_Sale.php">Buy Or Sale</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="ragister.php">Register (soon)</a></li>
      </nav>
    </div>

    <script>
      $(".menu-icon").click(function(){
        $(this).toggleClass("active");
        $(".navigation-menu").toggleClass("active");
        $(".menu-icon i").toggleClass("fa-times");
      });
    </script>


 


 
  
    <section>
      <nav>
        <h4>by Droubi & Hamza</h4>
        <a class="button" >O Welcome</a>
      </nav>
      <div class="container">
        <h2 class="main-title">Al-Shamal Lands.</h2>
        <img src="home/bg1.png" class="bg1" alt="" />
        <img src="home/Man.png" class="Man" alt="" />
        <img src="home/rock1.png" class="rock" alt="" />

      </div>


      <div class="wrapper"><!-- Main Container -->
  
          <div class="box"><!-- Div that will hold the UL -->
          <div class="scroll">
            <ul>
              <li>News: aaaaaaawwwwwwwwwwwaaa</li>
              <li>News: bbbbbbwwwwwwwbbbb</li>
              <li>News: Having something to say</li>
            </ul>
            <ul>
              <li>News: sssswwwwwswwwwwwwwwwwwsss</li>
              <li>News: wwwwwwwwwwwwwwwww</li>
              <li>News: About what, I have no idea</li>
            </ul>
            <ul>
              <li>News: yywwwwwwwwwwwwwwwa</li>
              <li>News: wwwwwwwwwwwwwwwwwwwwwwwwwy</li>
              <li>News: Having something to say</li>
            </ul>
            <ul>
              <li>News: awwwwwwwwwwwwwwwwwwwh</li>
              <li>News: aaccccccccccbnnnnnnnnnn</li>
              <li>News: About what, I have no idea </li>
            </ul>
          </div>
          </div><!-- End Box -->
          
        </div><!-- End Main Container -->

        
      

      
      <!-- for vertical-scrolling bar -->
      <script>
          
        function scroller() {
          
            var scroll = $('div.scroll'); 
            
            var height = scroll.height();  
            
            var topAdj = -height-10; 
            
            
            scroll.animate({
              'top' : [topAdj, 'linear'] 
            }, 25000, function(){
              scroll.css('top', 80); //resets the top position of the Ul for the next cycle
              scroller(); // Recalls the animation cycle to begin.
            });}
          
        scroller();


      </script>

      
      <div class="content">
        
        <div class="really">

          <div class="content-images">
            <img src="home/logo.png" alt="" />
            <p class="arabic">دروبي و خليل</p>
            <p class="arabic">عقارات وأراضي الشمال</p>
          </div>
  
          
          <p class="text">
            WELCOME TO Droobi & Hamza ... </br>
            PIONEER OF real estates CULTURE.</br>
          </p>
          
          <p class="text2">
            <a href="Menu.php." class="btn btn-full"> Click To Order</a>
            <a href="Ragister.php" class="btn btn-nav"> Register</a>
          </p>

          <p class="text">
            In the heart of palestine sites , almost like the heart of three contenents .
            Sitting on its terrace watching one of the most
            spectacular sunsets, you can almost forget that you are actually
            in a quite mountain see the sea in front of you .
          </p>
          

        </div>
      </div>
    </section>


    
  

    <! -- #for scrolling down pages animation -->
    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
      integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
    <script src="home/AnimHomescript.js"></script>


    
    <section class="gallery">
      <div class="item"><img class="customIMG" src="https://images.unsplash.com/photo-1434725039720-aaad6dd32dfe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2098&q=80" alt="">  
        <div class="caption">
          <h2>beauty</h2>
          <p> all the way you like</p>
        </div>

      </div>

      <div class="item"><img class="customIMG" src="https://images.unsplash.com/photo-1559827291-72ee739d0d9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1936&q=80" alt="">
      </div>

      <div class="item show"><img class="customIMG" src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80" alt="">
        <div class="caption">
          <h2>beauty ....</h2>
          <p>all the way you like ........</p>
        </div>
      </div>
      <div class="item"><img class="customIMG" src="https://images.unsplash.com/photo-1544275953-31eb9e355572?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt=""> 
    </div>
    </section>
    <script>
      
      var mySetInter;
      var mylastTimeOut;

      const items = document.querySelectorAll('.item');
      items.forEach(item => {
        item.addEventListener('click', () => {

          items.forEach(item => item.classList.remove('show'));
          item.classList.add('show');
          
          clearInterval(mySetInter); //stop already interval running



          clearTimeout(mylastTimeOut); //to avoid contradiction between timeouts

          mylastTimeOut = setTimeout(function(){
            setTimeCallback(); //start interval again after 30sec
          },30000);

        })

       
      })
 
      
      setTimeCallback(); //for the first time , before some one clicks , happened ones
      
      function setTimeCallback(){
        console.log("now");
             //no need to make a while for items since setinterval is happening continuously
          var i=0;
          mySetInter = setInterval(function(){
          console.log(i);
          items.forEach(item => item.classList.remove('show'));
          items[i].classList.add('show');
          
          if(i==items.length-1){
            i=0;
          }else{
            i++;
          }
         
      },5000)
   
      }
        
        
      
    </script>


<! -- #for arrow -->
<p style="width:50px;height:20px;position:absolute; z-index:1001; bottom:50px;right:5px;">
  <i class="fa fa-arrow-circle-up" id="tifer" aria-hidden="true" onclick="tiger()" style="font-size:35px;cursor:pointer;position:fixed"></i>
</p>



<! -- App pics -->
<div id="appp" class="AppS">
  <table>
      <tr>
          <th><div class="aio" ><img src="pictures/n1.jpg"><h1>nature</h1></div></th>
          <th><div class="aio" ><img src="pictures/n2.jpg" ><h1> shufa</h1></div></th>
          <th><div class="aio"><img src="pictures/n3.jpg"   ><h1>kufer al labed</h1></DIV></th>
          <th><div class="aio"><img src="pictures/n4.jpeg"  ><h1>love of naure</h1></DIV></th>
      </tr>
      <tr>
          <th><div class="aio" ><img src="pictures/p1.jpg" ><h1>monther1</h1> </div></th>
          <th><div class="aio" ><img src="pictures/p2.jpg" ><h1>monther2</h1></div></th>
          <th><div class="aio"><img src="pictures/p3.jpg"   ><h1>monther3</h1></DIV></th>
          <th><div class="aio"><img src="pictures/p4.jpg"  ><h1>monther4  </h1></DIV></th>

      </tr>
      <tr>
          <th><div class="aio" ><img src="pictures/c1.jpg"><h1>Running</h1></div></th>
          <th><div class="aio"><img src="pictures/c2.jpg"  ><h1>Archery</h1></DIV></th>
          <th><div class="aio"><img src="pictures/c3.jpg"  ><H1>Hockey</H1></DIV></th>
          <th><div class="aio"><img src="pictures/c4.jpg"  ><H1>Football</H1></DIV></th>
      </tr>
   </table>
</div>




    <! -- #for social Contact -->
    <div class="sm">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-behance"></i></a>
    </div>




    
  </body>
</html>
