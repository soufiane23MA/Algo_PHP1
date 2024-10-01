<h1>Exercice12</h1>
<p>  A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch. 
Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG 
</p>
<h2>Resultat</h2>
<?php
$personnes = [
	"Mickaël" => "FRA",
	"Virgile" => "ESP",
	"Marie-Claire" => "ENG"
];
	

function afficheMessage ($personnes){
foreach($personnes as $name => $langue){
	 switch($langue){
	case "FRA": 
		echo "Salut , $name <br>";
		break;
		case "ESP":
			echo " Hola, $name <br>";
			break;
			case "ENG";
			echo "Hello , $name <br>";
			break;
};
 
}
}; afficheMessage($personnes);

 


 