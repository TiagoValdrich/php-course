<?php

    // a variavel file a partir de agora passa a ser do tipo resource.
    $file = fopen("log.txt", "a+");

    fwrite($file, date("Y-m-d H:i:s") . "\r\n");

    fclose($file);

    echo "Arquivo criado com sucesso";

?>