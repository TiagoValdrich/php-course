<?php

    $frutas = array("laranja", "abacaxi", "melancia");
    print_r($frutas);

    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";

    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Eco Sport";

    echo "<br/>";
    print_r($carros);
    echo "<br/>";

    echo end($carros[0]);

    $pessoas = array();

    echo "<br/>";

    array_push($pessoas, array(
        'nome' => 'Tiago',
        'idade' => 18
    ));

    array_push($pessoas, array(
        'nome' => 'Lucas',
        'idade' => 18
    ));

    print_r($pessoas);

?>