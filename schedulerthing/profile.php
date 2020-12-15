<?php
    session_start();
    require 'db_conn.php';

    $qr=$conn->prepare("select * from customer where c_id=?");
    $qr->execute([$_SESSION["c_id"]]);
    $rs = $qr->fetch(PDO::FETCH_BOTH)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/stylep.css">
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
<?php
echo '
<div class="profile">
  <div class="user_details">            
      <div id="content">
          <div class="info">
              <h3>User Details</h3>
              <div class="info_data">
                  <div class="data">
                      <h4>Name</h4>
                      <p>' . $rs['fname'].'</p>
                      <h4>Email</h4>
                      <p>' . $rs['c_email'].'</p>
                      <h3>Address</h3>
                      <p>' . $rs['c_address'].'</p>
                      
                      
                  </div>
                  <div class="data">
                      <h4>Phone</h4>
                      <p>' . $rs['c_contact'].'</p>
                  </div>
              </div>
          </div>
          <div class="user_address">
              
              <div class="user_address_data">
                  
              </div>
              <div class="data">

              </div>
          </div>
        </div>
  </div>
</div>
'
?>

</body>
</html>