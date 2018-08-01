<?php 

    //Variables scope.

    $name = "Tiago";

    function showName() {

        global $name;
        echo $name;

    }

    function showName2() {

        $name = "Lucas";
        echo "<br/> Show Name2: ".$name;

    }

    showName();
    showName2();

?>