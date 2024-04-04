<?php
    include_once('./templates/header.php');
?>

<div class="container">
    <?php include('./templates/backbtn.html'); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do contato</label>
            <input type="text" id="name" class="form-control" name="name" placeholder="Digite o nome" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" id="phone" class="form-control" name="phone" placeholder="Digite o telefone" required>
        </div>
        <div class="form-group">
            <label for="observarions">Observações</label>
            <textarea name="observarions" id="observations" cols="30" rows="3" class="form-control" placeholder="Digite as observações"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
    include_once('./templates/footer.php');
?>