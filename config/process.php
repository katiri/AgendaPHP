<?php
    // Arquivo responsável pelas operações no banco de dados

    session_start();

    include_once('connection.php');
    include_once('url.php');

    if(empty($_POST)){
        // Nenhum dado foi enviado por POST
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
    }
    else{
        // Algum dado foi enviado por POST
        $data = $_POST;

        if($data['type'] == 'create'){
            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);
            
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':phone', $data['phone']);
            $stmt->bindParam(':observations', $data['observations']);
            
            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato adicionado com sucesso!";
            }
            catch(PDOException $e){
                // Erro no cadastro
                $error = $e->getMessage();
                echo "Erro: $error <br>";
            }
        }

        if($data['type'] == 'edit'){
            $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);
            
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':phone', $data['phone']);
            $stmt->bindParam(':observations', $data['observations']);
            $stmt->bindParam(':id', $data['id']);
            
            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            }
            catch(PDOException $e){
                // Erro no cadastro
                $error = $e->getMessage();
                echo "Erro: $error <br>";
            }
        }

        header('Location:' . $BASE_URL . '../index.php');
    }

    $conn = null;