<?php
    include_once("header.php");
?>

<div class="container">
    <!-- BOTÃO VOLTAR -->
    <?php 
        include_once("backbtn.php"); 
    ?>
    <!-- EDITAR CONTATO -->
    <h1 id="main-title">Editar Contato</h1>
    <div class="row col-xs-12 col-sm-12 col-md-6 col-lg-6 d-flex">
        <form id="edit-form" action="<?=$BASE_URL?>/../config/processamento.php" method="POST" >
            <input type="hidden" name="type" value="edit" />
            <input type="hidden" name="id" value="<?=$onlyContato['id']?>" />
            <div class="form-group">
                <label for="nome">Nome do Contato:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$onlyContato['nome']?>" required>
            </div>
            <div class="form-group">
                <label for="fone">Telefone do Contato:</label>
                <input type="text" minlength="10" maxlength="13" class="form-control" id="fone" name="fone" value="<?=$onlyContato['telefone']?>" required>
            </div>
            <div class="form-group">
                <label for="observacao">Observação:</label>
                <textarea class="form-control" name="observacao" id="observacao" rows="3"><?=$onlyContato['observacao']?></textarea>
            </div><br>
            <div class="form-group row d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
    <!-- FIM EDITAR CONTATO -->
</div>

<?php
    include_once("footer.php");
?>