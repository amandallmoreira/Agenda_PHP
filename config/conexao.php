<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "";
    $porta = "3306";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$dbname; port=$porta", $user, $pass);

        //ATIVA O MODO DE ERRO
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        $erro = $e -> getMessage();
        echo $erro;
    }

?>