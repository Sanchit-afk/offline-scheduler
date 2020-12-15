<?php
session_start();
require 'db_conn.php';

$qr = $conn->prepare("select visit.*, shop.* from visit,shop where visit.s_id = shop.s_id and visit.c_id=? order by visit.v_date desc, visit.timeslot ");
$qr->execute([$_SESSION["c_id"]]);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/stylebo.css">

</head>

<body>
  <nav class="wrapper">
    <div class="wrapper">
      <div class="top_nav">
        <div class="left">
          <div class="logo">
            <p><span>Time</span> Booking</p>
          </div>
  
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
  <div class="profile">
    <div class="user_details">
      <div id="content">
        
          <h3>Bookings</h3>
        <?php
        while ($rs = $qr->fetch(PDO::FETCH_BOTH)) {
          // print_r($rs);
          $s_name = $rs['s_name'];
          $s_id = $rs['s_id'];
          // echo $s_name;
          // echo $s_id;
          // echo $rs['timeslot'];
          echo '
            <div class="info">
                <div class="info_data">
                    <div class="data">
                        <h4>Shop Name</h4>
                        <p>' . $s_name . '</p>
                        <h4>Time Slot</h4>
                        <p>' . $rs['timeslot'] . '</p>
                        
                    </div>
                    <div class="data">
                        <h4>Date</h4>
                        <p>' . $rs['v_date'] . '</p>
                    </div>
                </div>
            </div>
            <div class="user_address">
                
                <div class="user_address_data">
                    
                </div>
                <div class="data">

                </div>
            </div>';
        }
        ?>
      </div>
    </div>
  </div>̥
</body>

</html>