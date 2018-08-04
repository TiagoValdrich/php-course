<?php

    class Documento {

        private $numero;

        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($num) {
            $this->numero = $num;
        }

    }

    class CPF extends Documento {

        public function validar(): bool {

            $numeroCPF = $this->getNumero();

            return true;
        }

    }

    $doc = new CPF();

    $doc->setNumero("12345678911");

    var_dump($doc->validar());

    echo "<br/>";

    echo $doc->getNumero();

?>