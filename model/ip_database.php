<?php
    $dsn = 'mysql:host=localhost;dbname=test';
    $username = 'root';
    //$password = '*F689479C38767E0FEBC120065D4E8E5E676A5095';
    $password = 'Debolina2024';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include('errors/ip_error.php');
        exit();
    }
?>