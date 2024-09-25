<h1>Exercice2</h1>
<p> A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.
</p>
<h2>Resultat</h2>
<?php

 
$maPhrase = " « Notre formation DL commence aujourd'hui »";
$nbMots = str_word_count($maPhrase);

echo "$maPhrase content : $nbMots mots";
