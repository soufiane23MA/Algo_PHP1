<h1>Exercice6</h1>
<p> Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

</p>
<h2>Resultat</h2>
    <?php
            $prix_unitaire = 9.99;
            $quantite = 5;
            $prixHT = $prix_unitaire * $quantite;
            $tauxTva = 0.2;
            
            $prixTTC = $prixHT*(1 + $tauxTva);
            echo "Prix unitaire de l'article : $prix_unitaire   <br>";
            echo "La Quantité : $quantite  <br>";
            echo "Le Taux de la TVA : $tauxTva  <br>";




        
    
        echo " Le Montant de la facture est de : $prixTTC ";





    






