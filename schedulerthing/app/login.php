<?php 
    session_start();

    require '../db_conn.php';

    
    $stmt = $conn->prepare("SELECT * FROM customer WHERE c_email = ?");
    $stmt->execute([$_POST['c_email']]);
    $user = $stmt->fetch();

    if ($user && $_POST['c_password']== $user['c_password'])
    {
        header("Location: ../home.php?mess=success");
        $_SESSION["c_id"]=$user['c_id'];
    } else {
        header("Location: ../index.php?mess=error");
    }

?>