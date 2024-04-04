<?php
    include_once('./templates/header.php');
?>

<div class="container">
    <?php include('./templates/backbtn.html'); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="edit-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <div class="form-group">
            <label for="name">Nome do contato</label>
            <input type="text" id="name" class="form-control" name="name" value="<?= $contact['name'] ?>" placeholder="Digite o nome" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" id="phone" class="form-control" name="phone" value="<?= $contact['phone'] ?>" placeholder="Digite o telefone" required>
        </div>
        <div class="form-group">
            <label for="observarions">Observações</label>
            <textarea name="observations" id="observations" cols="30" rows="3" class="form-control" placeholder="Digite as observações"><?= $contact['observations'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php
    include_once('./templates/footer.php');
?>