<h1>Exercice7</h1>
<p> Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser
</p>
<h2>Resultat</h2>
<?php

    $personne = " ";
    $age = 7 ;

// commence tjr par la tranche d'age la plus élevée;
// il a falut rajouter la derniére condition pour afficher le tous correctement.

    if( $age >= 12  ){
    $personne = "Cadet";
    }else if ( $age >= 10){
    $personne = "Minime";
    }else if ($age >= 8 )   {
    $personne ="Pupille";
    }else if( $age >= 6   ) {
        $personne = "poussin";
    } else if( $personne < 6 ){
      
    echo " la catégorie n’est pas gérée, merci de le préciser. ";
    }  
    echo " L'enfant qui a $age  ans appartient à la Cathégorie << $personne >>"; 

 
