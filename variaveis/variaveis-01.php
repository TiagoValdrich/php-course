<?php

    // Some global variables.

    // Passing elements by URL.
    $name = $_GET["name"];
    $numbers = $_GET["numbers"];
    echo $name . " " . $numbers;

    /* -- */

    $ip = $_SERVER["REMOTE_ADDR"];
    $script = $_SERVER["SCRIPT_NAME"];
    var_dump($_SERVER);
    echo "<br/>".$ip;

?>