<h1>Exercice9</h1>
<p> Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>
<h2>Resultat</h2>
<?php

    $age = 30 ;
    $sex = "F"; 
    

    echo  "Age :  " . $age . " ". "<br>";
    echo  "Sex :  " . $sex . " ". "<br>";
     

    if(($sex == "F" && $age >= 18 && $age <= 35) || ($sex == "H" && $age > 20)) {
        echo "La Personne est imposable";
    } else { 
        echo " La Personne n'est pas Imposable";
    } ;
