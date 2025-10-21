<?php

class Soport
{
    // atributos
    public String $titol;
    protected int $numero;
    private int $preu;
    private static int $IVA = 21;

    // constructor
    function __construct($titol, $numero, $preu)
    {
        $this->titol = $titol;
        $this->numero = $numero;
        $this->preu = $preu;
    }

    // obtener precio del soporte
    public function getPreu()
    {
        return $this->preu;
    }

    // obtener precio mas IVA del soporte
    public function getPreuAmbIva()
    {
        return $this->preu * (1 + Soport::$IVA / 100);
    }

    // obtener numero de soportes
    public function getNumero()
    {
        return $this->numero;
    }

    // mostrar resumen
    public function mostraResum()
    {
        echo "Titol: " . $this->titol . ", Numero: " . $this->numero . ", Preu sin IVA: " . $this->preu . " euros";
    }
}