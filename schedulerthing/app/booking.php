<?php
    session_start();

    require '../db_conn.php';

  if(isset($_GET['s_id']))
  {
    $s_id=$_GET['s_id'];
    //echo $_SESSION["c_id"];
    // echo $s_id."\n";
  }


  $stmt = $conn->prepare("SELECT s_capacity FROM shop WHERE s_id= ?");
  $stmt->execute([$_GET['s_id']]);
  $user = $stmt->fetch();
  // echo $user['s_capacity'];

  $capacity = 0;
  $stmt1 = $conn->prepare("SELECT people FROM visit WHERE s_id = ? and timeslot = ? and v_date = ?");
  $stmt1->execute([$_GET['s_id'], $_POST["timeslot"], $_POST["date"]]);
  while($rs= $stmt1->fetch(PDO::FETCH_BOTH)){
    $capacity = $capacity + $rs['people'];
  }
  
  $count= $user['s_capacity']-$capacity;
  $no_people= (int)$_POST['no_people'];
  
  if($no_people<=$count){
    $stmt2=$conn->prepare("INSERT INTO visit(s_id,c_id,timeslot,v_date,people) VALUE(?,?,?,?,?)");
    $res=$stmt2->execute([$s_id,$_SESSION["c_id"],$_POST["timeslot"],$_POST["date"],$no_people]);
    header("Location: ../home.php?mess=success");
  }else{
    header("Location: ../booking2.php?s_id=".$s_id."&mess=error");
  }


?>