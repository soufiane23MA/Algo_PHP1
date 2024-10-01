<h1>Exercice10</h1>
<p> A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.
Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €

</p>
<h2>Resultat</h2>
<?php
 function calculerRenduMonnaie($montant_a_payer, $somme_versee) {
    if ($somme_versee < $montant_a_payer) {
        echo "Montant insuffisant pour effectuer le paiement.<br>";
        return;
    }

    $reste_a_payer = $somme_versee - $montant_a_payer;

    // Affichage des informations
    echo "Montant à payer : " . $montant_a_payer . " €<br>";
    echo "Montant versé : " . $somme_versee . " €<br>";
    echo "Reste à payer : " . $reste_a_payer . " €<br>";
    echo "***************************************************<br>";
    echo "Rendu de monnaie :<br>";

    // Calcul du nombre de billets et pièces
    $billets_10 = intval($reste_a_payer / 10);
    $reste_a_payer %= 10;

    $billets_5 = intval($reste_a_payer / 5);
    $reste_a_payer %= 5;

    $pieces_2 = intval($reste_a_payer / 2);
    $reste_a_payer %= 2;

    $pieces_1 = intval($reste_a_payer / 1);

    // Affichage du rendu de monnaie
    if ($billets_10 > 0) echo $billets_10 . " billet(s) de 10 €<br>";
    if ($billets_5 > 0) echo $billets_5 . " billet(s) de 5 €<br>";
    if ($pieces_2 > 0) echo $pieces_2 . " pièce(s) de 2 €<br>";
    if ($pieces_1 > 0) echo $pieces_1 . " pièce(s) de 1 €<br>";
};
$montant_a_payer = 152;
$somme_versee = 200;
calculerRenduMonnaie($montant_a_payer, $somme_versee);
?>