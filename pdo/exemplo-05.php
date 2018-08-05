<?php

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = 4;

    $stmt->bindParam(":ID", $id);

    if ( $stmt->execute() ) {

        echo "Dados excluidos com sucesso!";

    } else {

        echo "Erro ao excluir os dados!";

    }

?>