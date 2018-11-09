<?php
define ("RETOUR", "<br>");
$salade = array('pomme', 'banane', 'raisin', 'poire', 'orange', 'figue');
print "Voici le tableau original: " . RETOUR;
foreach ($salade as $val){
print $val . RETOUR;
}
$recherche = array_search('raisin', $salade);
print RETOUR . "Position n° " . ($recherche+1) . " dans le tableau." . RETOUR;
print RETOUR;
print "Maintenant, sans le foreach:" . RETOUR;

$recherche2 = array_values($salade);
print_r ($recherche2);

?>