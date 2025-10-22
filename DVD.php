<?php
class DVD extends Soport
{
    // atributos
    public string $idiomes;
    public string $formatPantalla;

    // constructor
    function __construct(string $titol, int $numero, float $preu, string $idiomes, string $formatPantalla){
        // Sobreescribir el constructor de la clase padre
        parent::__construct($titol, $numero, $preu);

        $this->idiomes = $idiomes;
        $this->formatPantalla = $formatPantalla;
    }

    // sobreescribir el metodo mostraResum
    function mostraResum(){
        parent::mostraResum();
        echo "Idiomes: " . $this->idiomes . "<br>";
        echo "Format Pantalla: " . $this->formatPantalla . "<br>";
    }
}