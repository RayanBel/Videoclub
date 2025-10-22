<?php

include "Soport.php";

$soport1 = new Soport("Tenet", 22, 3);
echo "<strong>" . $soport1->titol . "</strong>";
echo "<br>Preu: " . $soport1->getPreu() . " euros";
echo "<br>Preu IVA inclos: " . $soport1->getPreuAmbIVA() . " euros";
$soport1->mostraResum();

include "CintaVideo.php";

$laMevaCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
echo "<strong>" . $laMevaCinta->titol . "</strong>";
echo "<br>Preu: " . $laMevaCinta->getPreu() . " euros";
echo "<br>Preu IVA inclos: " . $laMevaCinta->getPreuAmbIVA() . " euros";
$laMevaCinta->mostraResum();


include "Dvd.php";

$elMeuDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
echo "<strong>" . $elMeuDvd->titol . "</strong>";
echo "<br>Preu: " . $elMeuDvd->getPreu() . " euros";
echo "<br>Preu IVA inclos: " . $elMeuDvd->getPreuAmbIVA() . " euros";
$elMeuDvd->mostraResum();