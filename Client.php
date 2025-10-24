<?php

class Joc {
        public string $nom;
        private int $numero;
        private int $maxLloguerConcurrent;
        private array $soportsLlogats=[];

        function __construct(string $nom, int $numero, int $maxLloguerConcurrent = 3) {
                $this->nom = $nom;
                $this->numero = $numero;
                $this->maxLloguerConcurrent = $maxLloguerConcurrent;
        }

        function getNumero(): int{
                return $numero;
        }

        function setNumero(int $numero){
                $this->numero=$numero;
        }

        function getNumSoportsLlogats():int{
                return count($soportsLlogats);
        }

        function mostraResum(){
                echo $this->nom." té llogats ".getNumSoportsLlogats();
        }
}