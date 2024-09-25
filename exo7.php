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
$age = 10 ;

if( $age >= 6  && $age < 8 ) {
    $personne = "poussin";
}else if ($age >= 8 && $age <10 )   {
$personne ="Pupille";
} else if ( $age >= 10 && $age <12 ){
 $personne = "Minime";

}else if( $age >= 12  ){
$personne = "Cadet";
}else{
    echo "Si la catégorie n’est pas gérée, merci de le préciser. ";
};

echo " L'enfant qui a $age  ans appartient à la Cathégorie << $personne >>";