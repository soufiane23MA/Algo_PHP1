<h1>Exercice3</h1>
<p>  A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>
<h2>Resultat</h2>
<?php
$maPhrase = "« Notre formation DL commence aujourd'hui » <br>";
$maDeuxiemePhrase = str_replace("aujourd'hui","demain", $maPhrase) ;









echo $maPhrase ;
echo $maDeuxiemePhrase;

