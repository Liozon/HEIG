<?php

// Prix en CHF
$prix_chf = 12.3;

// Taux de l'euro
define ("TAUX_EURO", 1.22);

// Taux du dollars
define ("TAUX_DOLLARS", 0.91);

print ("Prix en francs suisses: ");
print $prix_chf . " CHF";
print ("<br>Prix en Euro: ");
print ($prix_chf/TAUX_EURO . " €");
print ("<br>Prix en Dollars: ");
print ($prix_chf/TAUX_DOLLARS . " $");
?>