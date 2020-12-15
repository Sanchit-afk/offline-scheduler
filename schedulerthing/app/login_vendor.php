<?php 
    session_start();

    require '../db_conn.php';


    
    $stmt = $conn->prepare("SELECT * FROM shop WHERE s_email = ?");
    $stmt->execute([$_POST['s_email']]);
    $user = $stmt->fetch();

    if ($user && $_POST['s_password']== $user['s_password'])
    {
        $_SESSION["s_id"]=$user['s_id'];
        header("Location: ../shopkeeper.php?mess=success");

    } else {
        header("Location: ../index.php?mess=error");
    }

?>