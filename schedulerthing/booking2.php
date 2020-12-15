<?php
    session_start();
    require 'db_conn.php'
?>
<?php
  if(isset($_GET['s_id']))
  {
    $s_id=$_GET['s_id'];
    //echo $_SESSION["c_id"];
  }
  $stmt = $conn->prepare("SELECT * FROM shop WHERE s_id = ?");
  $stmt->execute([$_GET['s_id']]);
  while($rs= $stmt->fetch(PDO::FETCH_BOTH)){
    $s_name=$rs['s_name'];  
  }
  $stmt1 = $conn->prepare("SELECT * FROM shop WHERE s_id = ?");
  $stmt1->execute([$_GET['s_id']]);
  while($rs1= $stmt1->fetch(PDO::FETCH_BOTH)){
    $s_name1=$rs1['s_name'];  
    $open=$rs1['s_openTime'];  
    $close=$rs1['s_closeTime'];  
    $d=strtotime($open);
    $openInt=(int)(date("H", $d));
    $closeInt=(int)date("H",strtotime($close));

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking</title>
<link rel="stylesheet" href="css/styleb.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>

    <nav class="wrapper">
        <div class="wrapper">
              <div class="top_nav">
              <div class="left">
              <div class="logo"><p><span>Time</span> Booking</p></div>
              <div class="search_bar">
                  <input type="text" placeholder="Search">
              </div>
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



<div class="container">
<div class="container-time">
<h2 class="heading"><?php echo $s_name ?></h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>#####################</p>
<p>$$$$$$$$$$$$$$$$$$$$</p>

<h3 class="heading-days">Saturday and sunday</h3>
<p>9am - 1am </p>
<p>1am - 10pm</p>

<hr>

<h4 class="heading-phone">Call Us: %%%%%%%%%%%%%%%%%%</h4>
</div>

<div class="container-form">
<?php echo '<form action="app/booking.php?s_id='.$s_id.'" method="POST">'?>
      <h2 class="heading heading-yellow">Reservation Online</h2>


      <div class="form-field">
      <p>Date</p>
      <input type="date" name="date">
      </div>
      <div class="form-field">
      <p>Time slot<p>
              <select name="timeslot">
              <?php
                $count=0;
                for ($openInt; $openInt < $closeInt; $openInt++) {
                  $d=strtotime($openInt.":00:00");
                  $d1=strtotime(($openInt+1).":00:00");
                  
                  echo '<option>'.date("H:i", $d).'- '.date("H:i", $d1).'</option>';
                }
                
              ?>

              </select>
      </div>
      <div class="form-field">
      <p>Number of People Visiting</p>
      <select name="no_people" id="#">
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      </select>
      </div>
      <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { 
          // <!-- <h4>Please select another timeslot or shop</h3> -->
          echo '<script>alert("Please select another timeslot,date or shop")</script>';
				}?>
      <button class="btn">Submit</button>
</form>
</div>
</div>


</body>
</html>