<?php
    include_once('./templates/header.php');
?>

<div id="view-contact-container" class="container">
    <h1 id="main-title"><?= $contact['name'] ?></h1>
    <p><b>Telefone:</b></p>
    <p><?= $contact['phone'] ?></p>
    <p><b>Observações:</b></p>
    <p><?= $contact['observations'] ?></p>
</div>

<?php
    include_once('./templates/footer.php');
?>