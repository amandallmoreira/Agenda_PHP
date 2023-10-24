<?php 
include_once("conexao.php");
include_once("url.php");

$query="SELECT*FROM contatos"; //string que manipula a tabela SQL;

$stmt=$conn->prepare($query);
$stmt->execute();  //executa uma consulta no Banco de Dados;

$AllContatos=[];
$AllContatos=$stmt->fetchAll();  //Retorna todas as linhas que tem na tabela Contatos.
?>