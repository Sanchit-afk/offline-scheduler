<?php
    require 'db_conn.php';

    $qr=$conn->prepare("select * from shop where s_category=?");
    $qr->execute(['Grocery']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
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
          <li><a href="contactus.html">Contact Us</a></li>
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
 <div class="row">
 <?php
    while($rs= $qr->fetch(PDO::FETCH_BOTH)){
      $s_name=$rs['s_name'];
      $s_id=$rs['s_id'];

      echo '
      <div class="column">
        <div class="card">
          <img src="img/grocery.jpg"  style="width:100%" height="200">
          <div class="container">
            <h2>'.$s_name.'</h2>
            <p class="title">Time</p>
            <p>Details</p>
            <p><a href="booking2.php?s_id='.$s_id.'"><button class="button">Book Now </button></a></p>
            <br>
          </div>
        </div>
      </div>
    ';
    }
    
 ?>   
 


    

    

</div>


</body>
</html>