<?php

    include_once("conexao.php");    
    include_once("url.php");
    
    $id;
    $data = $_POST;

    // Trata requisições POST do formulário
    if (!empty($data)){

        if ($data["type"]=="create"){
            try {
                $nome = $data['nome'];
                $telefone = $data['fone'];
                $obs = $data['observacao'];

                $queryInsert = "INSERT INTO contatos (nome, telefone, observacao) VALUES (:nome, :telefone, :obs)";
                $stmt = $conn -> prepare($queryInsert);
                $stmt -> bindParam(":nome", $nome);
                $stmt -> bindParam(":telefone", $telefone);
                $stmt -> bindParam(":obs", $obs);
                $stmt -> execute();
                header("Location:".$BASE_URL."/../templates/index.php" );
            } // FIM TRY
            catch (PDOException $e)
            {
                $erro = $e -> getMessage();
                echo $erro;
            }// fim catch
        } // FIM IF INSERTION
        elseif ($data["type"]=="edit"){
            try {
                $id = $data['id'];
                $nome = $data['nome'];
                $telefone = $data['fone'];
                $obs = $data['observacao'];

                $queryUpdate = "UPDATE contatos SET nome= :nome, telefone=:telefone, observacao=:obs WHERE id = :id";
                $stmt = $conn -> prepare($queryUpdate);
                $stmt -> bindParam(":nome", $nome);
                $stmt -> bindParam(":telefone", $telefone);
                $stmt -> bindParam(":obs", $obs);
                $stmt -> bindParam(":id", $id);
                $stmt -> execute();
                header("Location:".$BASE_URL."/../templates/index.php" );
            } //FIM TRY
            catch (PDOException $e)
            {
                $erro = $e -> getMessage();
                echo $erro;
            }// fim catch
        } //FIM IF EDITAR
        else{ // else para tratar requisições POST referente a deletar
            try{
                $id = $data['id'];
                $queryDelete = "DELETE FROM contatos WHERE id = :id";
                $stmt = $conn -> prepare($queryDelete);
                $stmt -> bindParam (":id", $id);
                $stmt -> execute();
                header("Location:".$BASE_URL."/../templates/index.php");
            } // FIM TRY
            catch (Exception $e){
                echo $e -> getMessage();
            }
        }// FIM DELETAR 
    }// Fim IF chamadas POST
    else{ // Trata observação e lista de todos os contatos

        /* Função EMPTY é nativa do PHP e recebe um argumento. Se esse argumento estiver vazio retorna TRUE e se esse argumento não estiver vazio retorna FALSE*/

        if (!empty($_GET)) { // Entra no IF senão for Vazio (! significa negação no IF)
            
            $id = $_GET["id"];
        }

        if (!empty($id)){
            $query = "SELECT * FROM contatos WHERE id= :id";
            $stmt = $conn -> prepare($query);
            $stmt -> bindParam(":id", $id);
            $stmt -> execute();
            $onlyContato = $stmt -> fetch();
        }else{ // Lista de todos os contatos na tabela
            $query = "SELECT * FROM contatos";
            $stmt = $conn->prepare($query);
            $stmt -> execute();
            $AllContatos = [];
            $AllContatos = $stmt -> fetchAll(); //Retorna todas as linhas da tabela
        } //FIM ELSE
    }

?>