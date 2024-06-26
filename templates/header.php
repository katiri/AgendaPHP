<?php
    include_once('./config/process.php');

    // limpa a mensagem
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        $_SESSION['msg'] = "";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda de contatos</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS -->
        <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                    <img src="img/logo.svg" alt="Agenda" width="50px">
                </a>
                <div>
                    <div class="navbar-nav">
                        <a href="<?= $BASE_URL ?>index.php" id="home-link" class="nav-link active">Agenda</a>
                        <a href="<?= $BASE_URL ?>create.php" id="create-link" class="nav-link active">Adicionar contato</a>
                    </div>
                </div>
            </nav>
        </header>