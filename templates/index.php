<?php
    include_once("header.php");
?>

    <div class="container">
        <h1 id="main-title">Minha Agenda</h1>

        <?php if (count($AllContatos) > 0){ ?>
            <table class="table" id="contatcts-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($AllContatos as $contato) {?>
                        <tr>
                            <td scope="row"><?=$contato["id"]?></td>
                            <td scope="row"><?=$contato["nome"]?></td>
                            <td scope="row"><?=$contato["telefone"]?></td>
                            
                            <td class="actions">
                                <a href="<?=$BASE_URL?>/show.php?id=<?=$contato["id"]?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?=$BASE_URL?>/edit.php?id=<?=$contato["id"]?>"><i class="fas fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="<?=$BASE_URL?>/../config/processamento.php" method="POST">
                                    <input type="hidden" name="type" value="delete" />
                                    <input type="hidden" name="id" value="<?=$contato['id']?>" />
                                    <button type="submit" class=delete-btn><i class="fas fa-times delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        <?php }else{ ?>
            <p id="empty-list-text">Não há contatos cadastrados
                <a href="<?=$BASE_URL?>/create.php"></a>
            </p>
        <?php } ?>
    
    </div>

<?php
    include_once("footer.php");
?>
