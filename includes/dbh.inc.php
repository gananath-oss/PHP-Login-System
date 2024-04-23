<?php

    $dns = "mysql:host=localhost;dbname=myfirstdb";
    $dbusername = "root";
    $dbpassword = ""; 

    try {
        $pdo = new PDO($dns, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }