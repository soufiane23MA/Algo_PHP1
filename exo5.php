<h1>Exercice5</h1>
<p> Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>
<h2>Resultat</h2>
<?php

//$valeurEnFrancs = 100;
//$valeurEuro = 15.24 ;
// calcule de la formule

echo $valeurEuro;
function conevtirEuro ($valeurEnFrancs) {
//$tauxConversion = 15.24/100;
//$valeurEuro = $valeurEnFrancs
$valeurEuro = ($valeurEnFrancs * 15.24)/100;
return $valeurEuro;
};
echo conevtirEuro($valeurEuro,2);