<?php 
include_once("conexao.php");
include_once("url.php");
$id;

if(!empty($_GET)){  //SÓ ENTRA NO IF SE FOR VERDADEIRO, ! É NEGAÇÃO, SE NEGA UM f ELE VIRA v.
    $id=$_GET["id"];

}//fim IF
if(!empty($id)){ //não retorna nada
    $query="SELECT*FROM contatos WHERE id=:id";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(":id",$id);  
    $stmt->execute();
    $onlyContato=$stmt->fetch();  //Retorna apenas a linha referente ao ID.
}

else{
    $query="SELECT*FROM contatos"; //string que manipula a tabela SQL;
    $stmt=$conn->prepare($query);
    $stmt->execute();  //executa uma consulta no Banco de Dados;
    $AllContatos=[];
    $AllContatos=$stmt->fetchAll();  //Retorna todas as linhas que tem na tabela Contatos.

}//fim ELSE


?>