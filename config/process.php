<?php
    // Arquivo responsável pelas operações no banco de dados

    session_start();

    include_once('connection.php');
    include_once('url.php');
    
    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);