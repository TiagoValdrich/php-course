<?php

    class Pessoa {

        public $nome;
        
        public function falar(){

            return "O meu nome eh ".$this->nome;

        }

    }

    $glaucio = new Pessoa();

    $glaucio->nome = "Glaucio Daniel";

    echo $glaucio->falar();

?>