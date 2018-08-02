<?php

    $pessoas = array();

    array_push($pessoas, array(
        'nome' => 'Tiago',
        'idade' => 18
    ));

    array_push($pessoas, array(
        'nome' => 'Lucas',
        'idade' => 18
    ));
    
    $jsonEncode = json_encode($pessoas);
    $jsonDecode = json_decode($jsonEncode, true); //Sem o true, vira objeto.
    echo $jsonEncode;
    echo "<br/>";
    print_r($jsonDecode);

?>