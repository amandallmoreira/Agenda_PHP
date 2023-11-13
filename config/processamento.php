<?php 
include_once("conexao.php");
include_once("url.php");
$id;

if(!empty($_GET)){  //SÓ ENTRA NO IF SE FOR VERDADEIRO, ! É NEGAÇÃO, SE NEGA UM f ELE VIRA v.
//SÓ ENTRA AQUI SE O $_GET NÃO FOR VAZIO.    
    $id=$_GET["id"];

}//fim IF

/*FUNÇÃO EMPTY É NATIVA DO PHP E RECEBE UM ARGUMENTO. SE ESSE ARGUMENTO TIVER VAZIO ELE RETORNA TRUE SE ESTIVER CHEIO RETORNA FALSO*/ 

/* ! NEGA */ 

if(!empty($id)){ //$id possui algum valor
    $queryIdConsulta="SELECT id, nome,telefone, observacao FROM contatos WHERE id=:id";
    $stmt=$conn->prepare($queryIdConsulta);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $onlyContato=$stmt->fetch(); //retorna apenas o contato referente a coluna ID
}

if(!empty($id)){ //não retorna nada, 
    $query="SELECT*FROM contatos WHERE id=:id";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(":id",$id);  
    $stmt->execute();
    $onlyContato=$stmt->fetch();  //Retorna apenas a linha referente ao ID.
}

else{ //vai ser a listagem de todos os contatos da tabela CONTATOS
    $query="SELECT*FROM contatos"; //string que manipula a tabela SQL;
    $stmt=$conn->prepare($query);
    $stmt->execute();  //executa uma consulta no Banco de Dados;
    $AllContatos=[];
    $AllContatos=$stmt->fetchAll();  //Retorna todas as linhas que tem na tabela Contatos.

}//fim ELSE


?>