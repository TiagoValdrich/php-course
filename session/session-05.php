<?php

    require_once "./config.php";

    echo session_save_path();
    echo "<br/>";
    var_dump(session_status());

    switch(session_status()){

        case PHP_SESSION_DISABLED:
            echo "Desabilitado";
        break;

        case PHP_SESSION_NONE:
            echo "Sem conteudo na session";
        break;

        case PHP_SESSION_ACTIVE:
            echo "Sessao ativada";
        break;
        
    }

?>