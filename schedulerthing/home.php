<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/slide.js"></script>
</head>
<body>
<nav class="wrapper">
	<div class="wrapper">
          <div class="top_nav">
          <div class="left">
          <div class="logo"><p><span>Time</span> Booking</p></div>

      </div> 
      <div class="right">
       <ul>
          <li><a href="app/logout.php">Logout</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="bottom_nav">
      <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="booking.php">Bookings </a></li>
        <li><a href="team.php">Our team</a></li>
        </ul>
  </div>
</div>
</nav>


<section class="section1">
 
     
</section>



<div class="slider">
  <div class="slides">
    <!--radio buttons start-->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    
    <!--radio buttons end-->
    <!--slide images start-->
    <div class="slide first">
      <img src="img/img1.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/img1.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/img1.jpg" alt="">
    </div>
    <!--slide images end-->
    <!--automatic navigation start-->
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
     
    </div>
    <!--automatic navigation end-->
  </div>
    <!--manual navigation end-->
</div>


<section class="section2">
<div class="row">

            <div class="column">
             
                <img src="img/grocery.jpg" alt="Jane" style="width:100%" height="200">
                <div class="container">
                  <h2 align="center"><a href="grossary.php ">Groceries</a></h2>
                 </div>
              
            </div>

            <div class="column">
              
                <img src="img/saloon.jpg" alt="Mike" style="width:100%"  height="200">
                <div class="container">
                  <h2 align="center"><a href="saloon.php">Saloon</a></h2>
                 </div>
           
            </div>
  
          <div class="column">       
              <img src="img/medical.jpg" alt="Mike" style="width:100%"  height="200">
              <div class="container">
                <h2 align="center"><a href="medical.php">Medical</a></h2>
                </div>
          </div>
  
  <div class="column">
      <img src="img/garage.jpg" alt="John" style="width:100%"  height="200">
      <div class="container">
        <h2 align="center"><a href="garage.php">Garage</a></h2>
       </div>
    </div>
</div>
</section>


</body>
</html>