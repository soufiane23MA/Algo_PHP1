<h1>Exercice11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>
<h2>Resultat</h2>
<?php
//  attention le foreach est sans le "camelcase";
// n'oublie pas le point-vérgule a chaque fois.


$mesVoitures = ["Peugeot","Renault","BMW","Mercedes"];
$nbVoiture = count($mesVoitures);
echo  " Il y a $nbVoiture  Marques de Voitures dans le tableau <br> ";
foreach( $mesVoitures as $marque){
    echo $marque ." <br>" ;
};
