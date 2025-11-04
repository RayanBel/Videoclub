<?php
namespace Dwes\ProjecteVideoclub;

include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Joc.php";
include_once "Client.php";

class Videoclub  {
        private string $nom;
        private array $productes=[];
        private int $numProductes=0;
        private array $socis=[];
        private int $numSocis=0;

        public function __construct($nom) {
                $this->nom=$nom;
        }

        private function incloureProducte($producte){
                $this->productes[]=$producte;
                $this->numProductes++;
                echo "======<br>Inclòs soport ".$this->numProductes."<br>======";
        }

        function incloureCintaVideo($titol, $preu, $durada){
                $DVH=new CintaVideo($titol, $this->numProductes+1, $preu, $durada);
                $this->incloureProducte($DVH);
        }

        function incloureDvd($titol, $preu, $idiomes, $pantalla){
                $dvd=new DVD($titol, $this->numProductes+1, $preu, $idiomes, $pantalla);
                $this->incloureProducte($dvd);
        }

        function incloureJoc($titol, $preu, $consola, $minJ, $maxJ){
                $joc=new Joc($titol, $this->numProductes+1, $preu, $consola, $minJ, $maxJ);
                $this->incloureProducte($joc);
        }

        function incloureSoci($nom, $maxLloguersConcurrents = 3){
                $soci=new Client($nom, $this->numSocis+1, $maxLloguersConcurrents);
                $this->numSocis++;
                $this->socis[]=$soci; // añadir socio al array
                echo "======<br>Inclòs soci ".$nom." amb número ".$this->numSocis."<br>======<br>";

        }

        function llistarProductes(){
                foreach($this->productes as $producto)
                        $producto->mostraResum();
        }

        function llistarSocis(){
            // mostrar lista de socios
            echo "Lista de socis:<br>";
            foreach($this->socis as $socio)
                echo $socio->mostraResum()."<br>";
        }

        function llogarSociProducte($numeroClient, $numeroSoport){

            // obtener objeto cliente
            $socioActual = null;
            foreach ($this->socis as $socio) {
                if ($numeroClient == $socio->getNumero()){
                    $socioActual = $socio;
                }
            }

            // obtener objeto soport
            $productoActual = null;
            foreach ($this->productes as $producte) {
                if ($numeroSoport == $producte->getNumero()){
                    $productoActual = $producte;
                }
            }

            // alquilar producto a socio/cliente
            if ($socioActual != null and $productoActual != null){
                $socioActual->llogar($productoActual);
            } else {
                echo "Socio o producto no encontrado<br>";
            }


        }
}
