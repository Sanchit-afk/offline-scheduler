<?php 
    session_start();

    require '../db_conn.php';

        if(isset($_GET['s_id']))
    {
        $s_id=$_GET['s_id'];
        //echo $_SESSION["c_id"];
    }
    $stmt1 = $conn->prepare("SELECT * FROM shop WHERE s_id = ?");
    $stmt1->execute([$_GET['s_id']]);
    while($rs1= $stmt1->fetch(PDO::FETCH_BOTH)){
        $open=$rs1['s_openTime'];  
        $close=$rs1['s_closeTime'];  
        $d=strtotime($open);
        $openInt=(int)(date("H", $d));
        $closeInt=(int)date("H",strtotime($close));
        $count=0;
        for ($openInt; $openInt < $closeInt; $openInt++) {
            
            $count += 1;
            // echo '<option>'.date("H:i", $d).'- '.date("H:i", $d1).'</option>';
          }
          $_SESSION["count"]=$count;
      
        //   echo $_SESSION["count"];
          header("Location: ../booking2.php?s_id='.$s_id.'");
        //   header("Location: ../booking2.php");
        
      }