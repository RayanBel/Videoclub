<?php
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

        }

        function llistarProductes(){

        }

        function llistarSocis(){

        }

        function llogarSociProducte($numeroClient, $numeroSoport){

        }
}