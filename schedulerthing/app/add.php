<?php 


    require '../db_conn.php';

    //start_session

    // $title = $_POST['title'];
    
    //fname,lname,c_email,c_password,c_addressc_contact

    // print_r($_POST);
    $stmt=$conn->prepare("INSERT INTO customer(fname,lname,c_email,c_password,c_address,c_contact) VALUE(?,?,?,?,?,?)");
    $res=$stmt->execute([$_POST['fname'],$_POST['lname'],$_POST['c_email'],$_POST['c_password'],$_POST['c_address'],$_POST['c_contact']]);
    // $res=$stmt->execute($_POST);

    if($res){
        header("Location: ../home.php?mess=success");
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