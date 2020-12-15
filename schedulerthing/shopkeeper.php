<?php
session_start();
require 'db_conn.php';

$qr = $conn->prepare("select visit.*, customer.* from visit,customer where visit.c_id = customer.c_id and visit.s_id=? order by visit.v_date desc, visit.timeslot ");
$qr->execute([$_SESSION["s_id"]]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylebo.css">
    
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
          <li><a href="contactus.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="bottom_nav">
     
  </div>
</div>
</nav>


<section class="section1">
 
    
</section>


        <div class="profile">
            <div class="user_details">   
            <div id="content">  
            <h3>Visits Shceduled</h3>
            
            <?php
            while ($rs = $qr->fetch(PDO::FETCH_BOTH)) {


              echo'
       

                     <div class="info">
                    
                    <div class="info_data">
                        <div class="data">
                            <h4>Customer Name</h4>
                            <p>' . $rs['fname'] . '</p>
                            <h4>Date</h4>
                            <p>' . $rs['v_date'] . '</p>
                            <!-- <h3>customer  Address</h3>
                            <p>#########################################</p> -->
                            
                        </div>
                        <div class="data">
                            <h4>Contact Number</h4>
                            <p> ' . $rs['c_contact'] . '</p>
                            <h4>Time Slot</h4>
                            <p> ' . $rs['timeslot'] . '</p>
                        </div>
                    </div>
                </div>
                <!-- <a class="order_details_button" href="order_details.html">View Order Details</a> -->
';
            }
          ?>
                      </div>
    </div>
  </div>

</body>
</html>