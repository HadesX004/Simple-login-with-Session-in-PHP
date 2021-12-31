<?php

    include("connect.php");

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = $pdo->prepare("INSERT INTO registro (name, email, password) VALUES (?, ?, ?)");
    
    if($query->execute(array($username, $email, $password))){
        echo("<script>window.location.assign('successRegister.php');</script>");

    }else{
        echo("<script>window.location.assign('failedRegister.php');</script>");

    }


?>