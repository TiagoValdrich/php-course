<?php

    // &$a -> passagem de parametro por referencia.

    $a = 10;

    function trocaValor(&$b){

        $b += 50;
        return $b;

    }

    echo trocaValor($a);
    echo "<br/>";
    echo $a;

?>