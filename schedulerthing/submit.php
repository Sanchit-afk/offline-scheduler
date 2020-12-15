<?php 
   if(isset($_POST['submit'])){
       echo ($_POST['email']);
       echo ($_POST['password']);
       echo ($_POST['retype']);
       echo ($_POST['radiogroup1']);
       echo implode("",$_POST['agreement']);
   }
?>