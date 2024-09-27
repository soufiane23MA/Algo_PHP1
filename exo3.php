<h1>Exercice3</h1>
<p>  A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>
<h2>Resultat</h2>
<?php

// déclarer les 2 variables et utiliser la fonction (str_replace);
$maPhrase = "« Notre formation DL commence aujourd'hui » <br>";
$maDeuxiemePhrase = str_replace("aujourd'hui","demain", $maPhrase) ;

echo "l'ancienne phrase est : $maPhrase ";
echo "la nouvelle phrase est : $maDeuxiemePhrase";

