<?php

    //array de constantes
    define("BANCO_DE_DADOS", [
        '127.0.0.1',
        'root',
        'password',
        'teste'
    ], false); // passando true vira case insensitive, ou seja minusculo.

    print_r(BANCO_DE_DADOS);

?>