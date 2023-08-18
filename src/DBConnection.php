<?php
    $user = "root";
    $password = "MySql_2005_password";

    $pdo = new PDO('mysql:host=localhost;dbname=ozzatech', $user, $password);

    var_dump($pdo);
?>