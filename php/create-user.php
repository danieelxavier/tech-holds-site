<?php

    //posts
    $nome = $_POST["email"];
    $sexo = $_POST["password"];
    $comentario = $_POST["comentario"];
    //criando conexão
    $conexao = mysql_connect("localhost", "root", "");
    //excessão de disponibilidade do servidor do banco
    if (!$conexao){
        die("<p>O servidor do banco está indisponível</p>");
    }
    //conectando no data base
    $banco = @mysql_select_db("opinioes",$conexao);
    //excessão da disponibilidade do data base
    if (!$banco){
        die("<p>Banco de Dados não disponível.</p>");
    }
    //se ocorrer tudo bem
    echo "<p>Comentário enviado.</p>";
    //inserindo na tabela
    $sql = "INSERT INTO opinioes VALUES('$nome', '$sexo', '$comentario')";

    //executando a query
    mysql_query ($sql, $conexao);
?>