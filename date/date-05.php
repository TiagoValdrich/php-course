<?php

    $data = new DateTime();
    $periodo = new DateInterval("P15D");

    echo $data->format("d/m/Y H:i:s");

    echo "<br>";

    $data->add($periodo);

    echo "<br>";

    echo $data->format("d/m/Y H:i:s");    

?>