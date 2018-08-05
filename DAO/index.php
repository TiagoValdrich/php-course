<?php

    require_once("config.php");

    //$user = new Usuario();
    //$user->loadById(1);
    //echo $user;

    // $lista = Usuario::getList();
    // echo json_encode($lista);

    // $search = Usuario::search("jo");
    // echo json_encode($search);

    // $usuario = new Usuario();
    // $usuario->login("user", "123456");
    // echo $usuario;

    //$aluno = new Usuario("aluno", "@alun0");

    // $aluno->setDeslogin("aluno");
    // $aluno->setDessenha("@lun0");

    //$aluno->insert();
    //echo $aluno;

    // $usuario = new Usuario();
    // $usuario->loadById(8);
    // $usuario->update("professor", "qwepoi");
    // echo $usuario;

    $usuario = new Usuario();
    $usuario->loadById(9);
    $usuario->delete();

?>