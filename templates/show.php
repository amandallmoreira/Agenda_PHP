<?php
    include_once("header.php");

?>

<div class="container" id="view-contact-container">

    <?php
        include_once("backbtn.php");
    ?>
    <!-- BOTÃO DE VOLTAR -->
    <h1><?=$onlyContato['nome']?></h1>
    <p class="bold">Telefone:</p>
    <p><?=$onlyContato['telefone']?></p>
    <p class="bold">Observação:</p>
    <p><?=$onlyContato['observacao']?></p>
</div>

<?php
    include_once("footer.php");
?>