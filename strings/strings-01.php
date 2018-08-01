<?php

    $nome = "tiago jose valdrich";
    
    echo ucwords($nome);

    echo "<br/>";

    echo ucfirst($nome);

    echo "<br/>";

    echo strtoupper($nome);

    echo "<br/>";

    echo strtolower($nome);

    echo "<br/>";

    echo str_replace("jose", "", $nome);

    echo "<br/>";

    echo strpos($nome, "valdrich");

    echo "<br/>";

    echo substr($nome, 0, 11);

    echo "<br/>";

    // Interessante esse uso de strpos e substr.
    $frase = "A batata esta ficando quente";
    $palavra = "esta";
    $position = strpos($frase, "esta");
    $sub = substr($frase, 0, $position);
    echo $sub;

    echo "<br/>";

    $sub2 = substr($frase, $position + strlen($palavra), strlen($frase));
    echo $sub2;
    

?>