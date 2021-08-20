<?php include("auth/connect.php");
    $_SESSION['login_user']='';
    unset($_SESSION['login_user']);
    header("LOCATION: index.php");
?>