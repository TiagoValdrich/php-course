<?php

    function showMessageToSomeone($name=""){

        if($name === ""){
            return "Hello ghost!";
        } else if ($name !== "") {
            return "Hello ".$name;
        }

    }

    echo showMessageToSomeone();
    echo "<br/>";
    echo showMessageToSomeone("Tiago");

?>