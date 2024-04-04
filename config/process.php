<?php
    // Arquivo responsável pelas operações no banco de dados

    session_start();

    include_once('connection.php');
    include_once('url.php');

    if(!empty($_GET)){
        // Retorna contato específico
        $id = $_GET['id'];
        
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    else{
        // Retorna todos os contatos
        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }