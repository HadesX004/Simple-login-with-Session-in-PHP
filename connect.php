<?php

    try{
        $pdo = new PDO("mysql:host=127.0.0.1:3306;dbname=bd_projeto", "", "");

    }catch (PDOException $e){
        echo("<script>window.location.assign('failed.php');</script>");

    }

?>
