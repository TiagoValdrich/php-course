<?php

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario =  :ID");

    $login = "jaum";
    $password = "654321";
    $id = 2;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    if ( $stmt->execute() ) {

        echo "Dados alterados com sucesso!";

    } else {

        echo "Erro ao alterar os dados!";

    }

?>