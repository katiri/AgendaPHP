<?php
    $host = 'localhost';
    $db_name = 'db_agenda_php';
    $user = 'root';
    $password = '';

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

        // Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Legal para desenvolvimento
    }
    catch(PDOException $e){
        // Erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error <br>";
    }