<h1>Exercice8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :
Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …
Remarque : proposer 2 solutions avec 2 types de boucles.
</p>
<h2>Resultat</h2>
<?php 
// la boucle for
echo "Premiére sollution <br> ";
echo "Table de 8:  <br> ";

$j = 8 ;
for($i = 1; $i <= 10; $i++) {
    echo  $i. " * " . 8  ." = ". $i*$j. "<br> ";
    

};
 
// la boucle while
echo "Deuxiéme sollution <br> ";
$i = 1;

while ($i <= 10 ) {
 echo   $i. " * " . 8  ." = ". $i*$j. "<br> ";
 $i++;
    
}

 