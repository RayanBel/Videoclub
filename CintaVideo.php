<?php
include_once "Soport.php";

class CintaVideo extends Soport {
    // atributos
    private int $durada;

    // constructor
    public function __construct($titol, $numero, $preu, $durada){
        // sobreescribir el constructor de la clase padre
        parent::__construct($titol, $numero, $preu);
        $this->durada = $durada;
        $this->mostraResum();
    }

    // sobreescribir metodo mostraResum()
    public function mostraResum(){
        // invocar el metodo padre
        echo "<br>Pel·lícula en VHS ";
        parent::mostraResum();
        echo "Durada: " . $this->durada . "<br>";
    }
}