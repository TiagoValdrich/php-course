<?php

    class Endereco {

        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($logradouro, $numero, $cidade)
        {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }

        public function __destruct()
        {
            //var_dump("DESTRUIR");
        }

        public function __toString()
        {
            return $this->logradouro.", ".$this->numero.", ".$this->cidade;
        }

    }




    $meuEndereco = new Endereco("Rua Batata Frita", "123", "Batatais");

    echo $meuEndereco;

?>