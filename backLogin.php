<?php

    include("connect.php");

    session_start();

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = $pdo->prepare("SELECT * FROM registro WHERE email like '$email' and password like '$password'");
    $query->execute();
    $row = $query->fetch();

    if($row){
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["logged"] = true;
        echo("<script>window.location.assign('successLogin.php');</script>");

    }else{
        echo("<script>window.location.assign('failedLogin.php');</script>");


    }
    


?>