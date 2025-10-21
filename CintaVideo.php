<?php

class CintaVideo extends Soport{
    // atributos
    private int $durada;

    // constructor
    public function __construct($nom, $numero, $maxLloguerConcurrent=3, int $durada){
        // sobreescribir el constructor de la clase padre
        parent::__construct($nom, $numero, $maxLloguerConcurrent=3);
        $this->durada = $durada;
    }

    // sobreescribir metodo mostraResum()
    public function mostraResum(){
        // invocar el metodo padre
        parent::mostraResum();
        echo "Durada: " . $this->durada . "<br>";
    }
}