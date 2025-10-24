<?php
include "Soport.php";

class Joc extends Soport
{
    // atributos
    public string $consola;
    private string $minNumJugadors;
    private string $maxNumJugadors;

    // cosntructor
    public function __construct(string $titol, int $numero, float $preu, string $consola, string $minNumJugadors, string $maxNumJugadors)
    {
        // invocar el constructor de la clase padre
        parent::__construct($titol, $numero, $preu);

        // atributos de clase hijo
        $this->consola = $consola;
        $this->minNumJugadors = $minNumJugadors;
        $this->maxNumJugadors = $maxNumJugadors;
    }

    // mostrar jugadores posibles para el juego
    public function mostraJugadorsPossibles()
    {
        // dependiendo del maximo de jugadores, se muestra el mensaje para "1 jugador" o "x jugadores"
        echo $this->maxNumJugadors >= 1 ? "Per a un jugador" : "Per a " . $this->maxNumJugadors . " jugadores<br>";
    }

    // sobreescribir metodo resumen
    public function mostraResum()
    {
        // mostrar ccnsola
        echo "<br>Joc per: " . $this->consola;

        // invocar metodo padre
        parent::mostraResum();

        // msotrar numero de posibles jugadores
        echo $this->mostraJugadorsPossibles();
    }
}