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

        function teLlogat(Soport $s): bool{
                foreach ($soportsLlogats as $llogats)
                        if ($llogats == $s)
                                return true;
                return false;
        }

        function llogar(Soport $s): bool {
                if($maxLloguerConcurrent>=getNumSoportsLlogats()){
                        echo "Tiene massa llogats";
                        return false;
                }
                if(teLlogat($s)){
                        echo "Ja ho té llogat";
                        return false;
                }
                $soportsLlogats[]=$s;
                echo "Se ha afegit un nou soport";
                return true;
        }
}