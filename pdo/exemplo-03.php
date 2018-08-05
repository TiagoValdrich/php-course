<?php

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

    $login = "batata";
    $password = "batatinha";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    if ( $stmt->execute() ) {

        echo "Dados inseridos com sucesso!";

    } else {

        echo "Erro ao inserir os dados!";

    }

?>