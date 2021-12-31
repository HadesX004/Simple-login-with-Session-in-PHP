<?php

    session_start();

    if($_SESSION["logged"] == true){
        echo("<script>window.location.assign('successLogin.php');</script>");

    }else{
        echo("<script>window.location.assign('login.php');</script>");

    }

?>
