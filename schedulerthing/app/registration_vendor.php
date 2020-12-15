<?php 
    session_start();

    require '../db_conn.php';

    // $title = $_POST['title'];
    
    //fname,lname,c_email,c_password,c_addressc_contact

    // print_r($_POST);
    $stmt=$conn->prepare("INSERT INTO shop(s_name, s_fname,s_lname,s_email,s_password,s_address,s_contact, s_category, s_capacity, s_openTime, s_closeTime) VALUE(?,?,?,?,?,?,?,?,?,?,?)");
    $res=$stmt->execute([$_POST['s_name'], $_POST['fname'],$_POST['lname'],$_POST['s_email'],$_POST['s_password'],$_POST['s_address'],$_POST['s_contact'],$_POST['s_catergory'], $_POST['s_capacity'], $_POST['open'], $_POST['close']]);
    // $res=$stmt->execute($_POST);
    $stmt1 = $conn->prepare("SELECT * FROM shop WHERE s_email = ?");
    $stmt1->execute([$_POST['s_email']]);
    $user = $stmt1->fetch();
    if($res){
        $_SESSION['s_id'] = $user['s_id'];
        header("Location: ../shopkeeper.php?mess=success");
    }else{
        echo "error";
    }

    // if(empty($title)){
    //     header("Location: ../index.php?mess=error");
    // }else{

    //     // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //     // VALUES ('John', 'Doe', 'john@example.com')";

    //     $stmt=$conn->prepare("INSERT INTO todos(title) VALUE(?)");
    //     $res=$stmt->execute($_POST);
        
    //      if($res){
    //         header("Location: ../index.php?mess=success");
    //      }else{
    //         header("Location: ../index.php");
    //      }
    //      $conn =null;
    //      exit();
    // }
?>