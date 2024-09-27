<h1>Exercice4</h1>
<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Resultat</h2>
<?php

// ecrire en miniscule + enlever les espace + inverser la phrase;

        $maPhrase = "Engage le jeu que je le gagne";

        $phraseMin = strtolower($maPhrase);
        $maPhrase2 = str_replace(" ", "", $phraseMin);
        $result = strrev($maPhrase2);
        if( $maPhrase2 == $result){
            echo " La Phrase $maPhrase est palindrom";
        } else {
            echo " La Phrase $maPhrase n'est pas palindrom";
        }
        