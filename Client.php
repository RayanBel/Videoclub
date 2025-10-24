<?php
class Client {
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
                return $this->numero;
        }

        function setNumero(int $numero){
                $this->numero=$numero;
        }

        function getNumSoportsLlogats():int{
                return count($this->soportsLlogats);
        }

        function mostraResum(){
                echo $this->nom." té llogats ".$this->getNumSoportsLlogats();
        }

        function teLlogat(Soport $s): bool{
                foreach ($this->soportsLlogats as $llogats)
                        if ($llogats == $s)
                                return true;
                return false;
        }

        function llogar(Soport $s): bool {
                if($this->teLlogat($s)){
                        echo '<br>Ja tens aquest suport "'.$s->titol.'" llogat.<br>';
                        return false;
                }
                if($this->maxLloguerConcurrent<=$this->getNumSoportsLlogats()){
                        echo "<br>Has arribat al màxim de lloguers.<br>";
                        return false;
                }
                $this->soportsLlogats[]=$s;
                echo "<br>Llogat correctament: ".$s->titol.": ".$this->nom;
                return true;
        }


        # Revisa si puedes arreglar esto 
        function tornar(int $numSoport): bool {
                foreach ($this->soportsLlogats as $llogats)
                        if ($llogats->getNumero()==$numSoport) {
                                echo '<br>"'.$llogats->titol.'" Suport retornat correctament.<br>';
                                unset($this->soportsLlogats[$numSoport]);
                                return true;
                        }

                echo "<br>No tens aquest suport llogat.<br>";
                return false;
        }

        function llistaLlogers(): void{
                echo $this->nom." té ".$this->getNumSoportsLlogats()." llogers.";
                foreach ($this->soportsLlogats as $llogats)
                        echo $llogats->mostraResum()."<br><hr>";
        }
}