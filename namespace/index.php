<?php

    require_once ("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Tiago Valdrich");
    $cad->setEmail("batata@hotmail.com");
    $cad->setSenha("123456");
    $cad->registrarVenda();
    
    //echo $cad;

?>