<?php

    function showMessage(){

        $argumentos = func_get_args();
        return $argumentos;

    }

    var_dump(showMessage("Hello", "Good Morning", "Good Evening"));

?>