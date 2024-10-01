<h1>Exercice13</h1>
<p> Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales. 
Affichage : 
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9 
Sa moyenne générale est donc de : 11.22 
</p>
<h2>Resultat</h2>
<?php
	$notes = [10,12,8,19,3,16,11,13,9];// déclartion du tableau
	$sumNotes = array_sum($notes);// calcule de la somme
	$nbNotes = count($notes);// calcule du nombre d'élement ( notes )
	$resulat = round(($sumNotes / $nbNotes),2);// le calcule
	
	echo " la moyenne générale est donc de :  $resulat ";
