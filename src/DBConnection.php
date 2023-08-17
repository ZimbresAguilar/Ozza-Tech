<?php
    $user = "root";
    $password = "";

    $pdo = new PDO('mysql:host=localhost;dbname=ozzatech', $user, $password);

    var_dump($pdo);
?>