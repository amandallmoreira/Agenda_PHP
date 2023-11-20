<?php
    include_once("header.php");
?>
 <!-- HEADER -->
<div class="container">

    <!-- BOTÃO DE VOLTAR -->
    <?php 
        include_once("backbtn.php");  
    ?>
    <!-- ADICIONAR NOVO CONTATO -->
    <h1 id="main-title">+ Novo Contato</h1>
    <div class="row col-xs-12 col-sm-12 col-md-6 col-lg-6 d-flex">
        <form id="create-form" action="<?=$BASE_URL?>/../config/processamento.php" method="POST" >
            <input type="hidden" name="type" value="create" />
            <div class="form-group">
                <label for="nome">Nome do Contato:</label>
                <input type="text" class="form-control" id="nome" name="nome" playceholder="Digite o nome do contato" required>
            </div>
            <div class="form-group">
                <label for="fone">Telefone do Contato:</label>
                <input type="text" minlength="10" maxlength="13" class="form-control" id="fone" name="fone" playceholder="Digite o nº de telefone" required>
            </div>
            <div class="form-group">
                <label for="observacao">Observação:</label>
                <textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
            </div><br>
            <div class="form-group row d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
    <!--FIM ADICIONAR NOVO CONTATO -->
</div>
<!-- FOOTER -->
<?php
    include_once("footer.php");
?>