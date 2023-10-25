<?php 
    $host="localhost"; //ou 127.0.0.1
    $dbname="agenda"; //nome do banco de dados
    $user="root";
    $pass=""; //senha
    $porta="3306"; 

   try{
        //PDO, é uma forma de acesso ao banco de dados;

        $conn= new PDO("mysql:host=$host; dbname=$dbname; port=$porta",$user,$pass);
        //Propriedades do PDO;

        //ATIVA O MODO DE ERROS:

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
        $erro=$e->getMessage();
        echo $erro;
   }



?>